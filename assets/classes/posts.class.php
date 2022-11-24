<?php
include "dbh.class.php";
class Posts extends Dbh
{

    public function newPost($title, $image, $details, $id)
    {
        $sql = $this->connect()->prepare("INSERT INTO tbl_posts(userid,p_name,p_img,p_details) VALUES(?,?,?,?)");
        if ($sql->execute(array($id, $title, $image, $details))) {
            $sql = null;
            return true;
            exit();
        } else {
            $sql = null;
            return false;
            exit();
        }
    }

    // Shows Posts Inside DASHBOARD
    public function showPosts($id)
    {
        // $sql = $this->connect()->prepare("SELECT * FROM tbl_posts WHERE userid = ? OR AND id = '2'");
        // $sql = $this->connect()->prepare("SELECT * FROM tbl_posts WHERE userid = ? ORDER BY id ASC LIMIT 2, 4");
        $sql = $this->connect()->prepare("SELECT * FROM tbl_posts WHERE userid = ? ORDER BY id DESC");
        if ($sql->execute(array($id))) {
            $row = $sql->fetchAll();

            foreach ($row as $post) {
                $title = substr($post['p_name'], 0, 30) . '...';
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
        } else {
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
        } else {
            $sql = null;
            return false;
            exit();
        }
    }

    public function showTrendPost(){
        $sql = $this->connect()->prepare("SELECT *,tbl_posts.id AS p_id
                                            FROM tbl_posts
                                            INNER JOIN users 
                                            ON tbl_posts.userid = users.id 
                                            ORDER BY tbl_posts.id DESC 
                                            LIMIT 3");
        if ($sql->execute()) {
           
            $posts = $sql->fetchAll();
            $post1 = [
                'id'=>$posts[0]['p_id'],
                "title"=>  strlen($posts[0]['p_name']) > 40 ? substr($posts[0]['p_name'],0,40).'...' : $posts[0]['p_name'] ,
                'author'=> $posts[0]['fname'],
                'date'=> date_format(date_create($posts[0]['p_date']), "M, jS. Y h:i a "),
                'img'=> $posts[0]['p_img']
            ]; 
            $post2 = [
                'id'=>$posts[1]['p_id'],
                "title"=>strlen($posts[1]['p_name']) > 40 ? substr($posts[1]['p_name'],0,40).'...' : $posts[1]['p_name'] ,
                'author'=> $posts[1]['fname'],
                'date'=> date_format(date_create($posts[1]['p_date']), "M, jS. Y h:i a "),
                'img'=> $posts[1]['p_img']
            ]; 
            $post3 = [
                'id'=>$posts[2]['p_id'],
                "title"=>strlen($posts[2]['p_name']) > 40 ? substr($posts[2]['p_name'],0,40).'...' : $posts[2]['p_name'] ,
                'author'=> $posts[2]['fname'],
                'date'=> date_format(date_create($posts[2]['p_date']), "M, jS. Y h:i a "),
                'img'=> $posts[2]['p_img']
            ]; 

           echo "
           <a href=\"gossip?read=$post1[id]\" class=\"col-md-8 mb-3 \">
                <div class=\"post-wrap\">
                    <img src=\"assets/img/posts/$post1[img]\" class=\"img-fluid main-post h-100\" alt=\"Trending\">
                    <div class=\"overlay\"></div>
                    <div class=\"caption\">
                        <p class=\"fs-2 fw-bold title\">$post1[title]</p>
                        <p class=\"fs-4 text-uppercase\">
                           Author:  $post1[author]
                        </p>
                        <p class=\"fs-6\">Date: $post1[date]</p>
                    </div>
                </div>
            </a>
            <div class=\"col-md-4 mb-2\">
                <div class=\"row\">
                    <a href=\"gossip?read=$post2[id]\" class=\"col-12 mb-2\">
                        <div class=\"post-wrap\">
                            <img src=\"assets/img/posts/$post2[img]\" alt=\"\" class=\"img-fluid side-post\">
                                <div class=\"overlay\"></div>
                                <div class=\"caption\">
                                <p class=\"fs-4 fw-bold title\">$post2[title]</p>
                                <p>$post2[author]</p>
                                <p class=\"fs-6\">Date: $post2[date]</p>
                                </div>   
                        </div>
                    </a>
                    <a href=\"gossip?read=$post3[id]\" class=\"col-12 mb-2 post-wrap\">
                        <div class=\"post-wrap\">
                            <img src=\"assets/img/posts/$post3[img]\" alt=\"\" class=\"img-fluid side-post\">
                                <div class=\"overlay\"></div>
                                <div class=\"caption\">
                                <p class=\"fs-4 fw-bold title\">$post3[title]</p>
                                <p>$post3[author]</p>
                                <p class=\"fs-6\">Date: $post3[date]</p>
                                </div>   
                        </div>  
                    </a>
                </div>
            </div>
           ";
           $sql = null;
           exit();
        }else {
            $sql = null;
            return false;
            exit();
        }
    }
    public function showAllPosts(){
        $sql = $this->connect()->prepare("SELECT *,tbl_posts.id AS p_id
                                            FROM tbl_posts
                                            INNER JOIN users 
                                            ON tbl_posts.userid = users.id 
                                            ORDER BY tbl_posts.id DESC 
                                            LIMIT 10");
        if ($sql->execute()) {
           
            $posts = $sql->fetchAll();

            foreach ($posts as $post){
                $title = strlen($post['p_name']) > 40 
                                                    ? substr($post['p_name'],0,40).'...' 
                                                    : $post['p_name'] ;



                $date = date_create($post['p_date']);
                $date = date_format($date, "M, jS. Y h:i a ");

                echo "
                <div class=\"item\">
                    <vi href=\"gossip?read=$post[p_id]\" class=\"post-wrap\">
                        <img src=\"assets/img/posts/$post[p_img]\" alt=\"\" class=\"img-fluid\">
                        <div class=\"overlay\"></div>
                        <div class=\"caption\">
                            <p class=\"fs-4 fw-bold\">$title</p>
                            <p class=\"fs-6\">
                                Date: $date
                            </p>
                        </div>
                    </vi>
                </div>
                ";
            }
            
            $sql = null;
            exit();
        }else {
            $sql = null;
            return false;
            exit();
        }
    }

    public function readPost($id)
    {
        $sql = $this->connect()->prepare("SELECT * 
                                        FROM tbl_posts 
                                        INNER JOIN users
                                        ON tbl_posts.userid = users.id
                                        WHERE tbl_posts.id = ?");

        if ($sql->execute(array($id))) {
            $post = $sql->fetch();

            $date = date_format(date_create($post['p_date']), "M, jS. Y h:i a ");
            echo "
                <img src=\"assets/img/posts/$post[p_img]\" alt=\"post image\" style=\"height: 400px;\" class=\"card-img-top\">

                <div class=\"caption my-3 p-3\">
                    <h1> $post[p_name]</h1>
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"assets/img/avatars/$post[avatars]\" height=\"80\" width=\"80\" class=\"rounded-circle shadow\" alt=\"avatar\">
                        <div class=\"details\">
                            <h5 class=\"fw-light\">$post[fname]</h5>
                            <h5 class=\"fw-light\">Data Posted: $date</h5>
                        </div>
                    </div>
                </div>
                <article class=\"p-3\">
                    $post[p_details]
                </article>
            
            ";
        }
        else {
            $sql = null;
            return false;
            exit();
        }
    }

    public function searchPost($search){
        $search = "%$search%";
        $sql = $this->connect()->prepare("SELECT *,tbl_posts.id AS p_id
                                         FROM tbl_posts 
                                         INNER JOIN users
                                         ON tbl_posts.userid = users.id
                                         WHERE p_name LIKE ?
                                         OR p_date LIKE ?
                                         OR p_details LIKE ?
                                         OR users.fname LIKE ?
                                         ");
        if ($sql->execute(array($search,$search,$search,$search))) {
           
            $posts = $sql->fetchAll();

           if (count($posts) < 1) {
                echo "<h3 class='text-center text-danger p-3'>Can not find $search</h3>";
           }else{
            foreach ($posts as $post){
                $title = strlen($post['p_name']) > 40 
                                                    ? substr($post['p_name'],0,40).'...' 
                                                    : $post['p_name'] ;



                $date = date_create($post['p_date']);
                $date = date_format($date, "M, jS. Y h:i a ");

                echo "
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"assets/img/posts/$post[p_img]\" style=\"height: 250px;\" class=\"card-img-top\">
                        <div class='card-body'>
                            <h3>$title</h3>
                            <h5>$post[fname]</h5>
                            <p>Date: $date</p>
                        </div>
                    </div>
                </div>
                ";
            }
           }
            
            $sql = null;
            exit();
        }else {
            $sql = null;
            return false;
            exit();
        }
    }
}
