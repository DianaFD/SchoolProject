<?php
    require "models/ArticlesModel.php";

    class Articles {
        private $articlesModel;

        function __construct() {
            $this->articlesModel = new ArticlesModel();
        }

        function getAll() {
            return $this->articlesModel->selectAll();
        }

        function createItem() {
            if (!isset($_SESSION["isLogged"]) || $_SESSION["isLogged"] !== TRUE) {
                http_response_code(401);
                return array("error"=>"Unauthorised. You have to be logged in.");
            }

            if (!empty($_POST['title']) && !empty($_POST['content'])) {

                $_POST['main_image_url'] = '';
                if (isset($_FILES['main_image_url'])) {
                    $file = $_FILES['main_image_url'];
                    move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
                    $_POST['main_image_url'] = $file["name"];
                }

                return $this->articlesModel->insertItem($_POST);
            } else {
                return "All fields are required";
            }
        }

        function editItem() {
            global $REQUEST;
            return $this->articlesModel->updateItem($REQUEST);
        }

        function deleteItem() {
            parse_str(file_get_contents("php://input"), $DELETE);
            return $this->articlesModel->deleteItem($DELETE['id']);
        }
    }
