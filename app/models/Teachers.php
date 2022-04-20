<?php

class Teacher
{

    public function __construct() {
        $this->db = new Database();
    }

    function getCountriesFormatted(): string
    {
        $result = $this->getCountries();
        $table = "";

        foreach ($result as $teachers) {
            $pop = number_format($teachers->population, 0, ",", ".");
            $table .= "<tr>
                <td>$teachers->id</td>
                <td>$teachers->name</td>
                <td>$teachers->capitalCity</td>
                <td>$teachers->continent</td>
                <td>$pop</td>
            </tr>";
        }

        return $table;

    }

    function getCountries()
    {
        $conn = new Database();
        $conn->query('SELECT * FROM teachers');
        

        return $conn->resultSet();
    }
}