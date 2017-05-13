<?php

    // require "model/CommentsModel.php";
    
    // class Comments() {
        
    //     function createComment() {
            
    //         if(!empty()$_POST['title']) && !empty($_POST['description'])) {
    //             $_POST['main_image_url'] = NULL;
                
    //                 $commentAdd= new CommentsModel;
    //                 return $commentAdd->createItem($_POST);
    //             }
    //         function __construct () {
    //             $this->commentsModel=new CommentsModel();
    //         }
            
    //         public function listComments() {
    //             return $this->commentsModel->listCommnets();
    //         }
    //     }
    // }
      require "app/models/CommentsModel.php";
    
            class Comments {
                function getAll() {
                    $commentsModel = new CommentsModel();
                    return $commentsModel->selectAll();
                }
                
                function createItem() {
                    if (!empty($_POST['title']) && !empty($_POST['content'])) {
                        $commentsModel = new CommentsModel();  
                        return $commentsModel->createItem($_POST);
                    } else {
                        return "All fields are required";
                }
            
                function editItem() {
                    global $PUT;
                    return $this->commentsModel->updateItem($PUT);
                }
            
             function deleteItem(){
                    parse_str(file_get_contents("php://input"), $DELETE);
                    return $this->$commentsModel->deleteItem($DELETE['id']);
            }
        }
    }