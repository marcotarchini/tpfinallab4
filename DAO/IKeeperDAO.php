<?php
    namespace DAO;

    use Models\Keeper as Keeper;

    interface IKeeperDAO
    {
        function GenerateId();
        function Add(Keeper $student);
        function Update(Keeper $student);
        function Search($id);
        function SearchByUserId($userId);
        function GetAll();
    }
