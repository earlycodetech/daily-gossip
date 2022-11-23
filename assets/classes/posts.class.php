<?php 
    include "dbh.class.php";
    class Posts extends Dbh{
        
        public function newPost($title,$image,$details,$id)
        {
            $sql = $this->connect()->prepare("INSERT INTO tbl_posts(userid,p_name,p_img,p_details) VALUES(?,?,?,?)");
            if ($sql->execute(array($id,$title,$image,$details))) {
                $sql = null;
                return true;
                exit();
            }else{
                $sql = null;
                return false;
                exit();
            }
        }
        
        public function showPosts($id)
        {
            // $sql = $this->connect()->prepare("SELECT * FROM tbl_posts WHERE userid = ? OR AND id = '2'");
            // $sql = $this->connect()->prepare("SELECT * FROM tbl_posts WHERE userid = ? ORDER BY id ASC LIMIT 2, 4");
            $sql = $this->connect()->prepare("SELECT * FROM tbl_posts WHERE userid = ? ORDER BY id DESC");
            if ($sql->execute(array($id))) {
                $row = $sql->fetchAll();
                
                foreach ($row as $post){
                    $title = substr($post['p_name'],0 ,30).'...';
                    $date = date_create($post['p_date']);
                    $date = date_format($date, "M, jS. Y h:i a ");
                    
                    echo "
                    <a href=\"../assets/includes/post.inc.php?del=$post[id]\" onclick=\"return confirm('ARE YOU 100% SURE YOU WANT TO DELETE THIS POST?, ONCE DELETED POST CANNOT BE RETRIEVED')\" class=\"col-md-4 mb-3 text-decoration-none text-dark\">
                    <div class=\"card shadow\">
                    <img src=\"../assets/img/posts/$post[p_img]\" alt=\"post image\" style='height: 250px;' class=\"card-img-top\">
                    <div class=\"card-body\">
                    <h5 class=\"fw-light\">
                    <span class=\"fw-bold\">Title:</span> <br> $title
                    </h5>
                    <p>
                    <span class=\"fw-bold\">Post Date:</span> $date
                    </p>
                    </div>
                        </div>
                        </a>
                        ";
            }
        }else{
            $sql = null;
            return false;
            exit();
        }
    }

        public function delPost($id)
        {
            session_start();
            $sql = $this->connect()->prepare("DELETE FROM tbl_posts WHERE id = ?");
            if ($sql->execute(array($id))) {
                $sql = null;
                return true;
                exit();
            }else{
                $sql = null;
                return false;
                exit();
            }
        }
    }