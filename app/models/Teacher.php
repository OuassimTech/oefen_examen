<?php

    class Teacher
    {

        public function __construct()
        {
            $this->db = new Database();
        }

        function getTeachersFormatted(): string
        {
            $result = $this->getTeachers();
            $table = "";

            foreach ($result as $teachers) {
                // $pop = number_format($teachers->population, 0, ",", ".");
                $table .= "<tr>
                <td>$teachers->id</td>
                <td>$teachers->docentenafkorting</td>
                <td>$teachers->voornaam</td>
                <td>$teachers->tussenvoegsel</td>
                <td>$teachers->achternaam</td>
                <td>$teachers->email</td>
                <td>$teachers->telefoonnummer</td>
                <td>$teachers->mentorklas</td>
                <td><a href='" . URLROOT . "/teachers/update/$teachers->id'>UPDATE</a></td>
                <td>delete</td>
            </tr>";
            }

            return $table;
        }

        function getTeachers()
        {
            $conn = new Database();
            $conn->query('SELECT * FROM teachers');


            return $conn->resultSet();
        }

        function getSingleTeacher($id) {
            $this->db->query("SELECT * FROM `teachers` WHERE `id` = :id");
                            
            $this->db->bind(':id', $id, PDO::PARAM_INT);

            return $this->db->single();
        }

        function updateTeacher($post) {
            $this->db->query("UPDATE teachers
                              SET docentenafkorting = :docentenafkorting,
                                  voornaam = :voornaam,
                                  tussenvoegsel = :tussenvoegsel,
                                  achternaam = :achternaam,
                                  email = :email,
                                  telefoonnumer = :telefoonnummer,
                                  mentorklas = :mentorklas
                              WHERE id = :id");

            // $this->db->bind(':id', $id,  PDO::PARAM_INT);
            $this->db->bind(':docentenafkorting, $post["docentenafkorting"], PDO::PARAM_STR');
            $this->db->bind(':voornaam, $post["voornaam"], PDO::PARAM_STR');
            $this->db->bind(':tussenvoegsel, $post["tussenvoegsel"], PDO::PARAM_STR');
            $this->db->bind(':achternaam, $post["achternaam"], PDO::PARAM_STR');
            $this->db->bind(':email, $post["email"], PDO::PARAM_STR');
            $this->db->bind(':telefoonnumer, $post["telefoonnumer"], PDO::PARAM_STR');
            $this->db->bind(':mentorklas, $post["mentorklas"], PDO::PARAM_STR');

            return $this->db->execute();
        }
    }
?>