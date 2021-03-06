<?php

class DbManager {
    //properties
    protected $connections = array();
    protected $repository_connection_map = array();
    protected $repositories = array();


    public function connect($name, $params) 
    {
        $params = array_merge(array(
            'dsn' => null,
            'user' => '',
            'password' => '',
            'options' => array(),
        ), $params);

        //create PDO class instance
        $con = new PDO($params['dsn'], $params['user'], $params['password'], $params['options']);
        //exception handling
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->connections[$name] = $con;
    }

    public function getConnection($name = null) 
    {
        if(is_null($name)) {
            return current($this->connections);
        }
        return $this->connections[$name];
    }

    public function setRepositoryConnectionMap($repository_name, $name) {
        $this->repository_connection_map[$repository_name] = $name;
    }

    public function getConnectionForRepository($repository_name)
    {
        if (isset($this->repository_connection_map[$repository_name])) {
            $name = $this->repository_connection_map[$repository_name];
            $con = $this->getConnection($name);
        } else {
            $con = $this->getConnection();
        }
        return $con;
    }

    public function get($repository_name) 
    {
        //to check to have repository name in $repositories
        if (!isset($this->repositories[$repository_name])) {
            //make class name
            $repository_class = $repository_name . 'Repository';
            //get connection
            $con = $this->getConnectionForRepository($repository_name);
            //to make instance
            $repository = new $repository_class($con);

            $this->repositories[$repository_name] = $repository;
        }
    }

    public function __destruct()
    {
        foreach($this->repositories as $repository) {
            unset($repository);
        }

        foreach($this->connections as $con) {
            unset($con);
        }
    }
}