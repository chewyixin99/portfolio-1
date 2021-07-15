<?php

class CommentDAO {

    public function createComment($comment) {

        $conn = new ConnectionManager();
        $pdo = $conn->getConnection();

        $sql = "INSERT INTO comments (page_id, parent_id, name, content, submit_date) 
                VALUES (:page_id, :parent_id, :name, :content, :submit_date)";
        $stmt = $pdo->prepare($sql);
        
        $page_id = $comment->getPageID();
        $parent_id = $comment->getParentID();
        $name = $comment->getName();
        $content = $comment->getContent();
        $submit_date = $comment->getSubmitDate();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->bindParam(":page_id", $page_id, PDO::PARAM_STR);
        $stmt->bindParam(":parent_id", $parent_id, PDO::PARAM_STR);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":content", $content, PDO::PARAM_STR);
        $stmt->bindParam(":submit_date", $submit_date, PDO::PARAM_STR);

        $result = $stmt->execute();

        $stmt = null;
        $conn = null;

        return $result;
        
    }

    public function getAllComments($page_id) {

        $conn = new ConnectionManager();
        $pdo = $conn->getConnection();

        $sql = "SELECT * FROM comments WHERE page_id = :page_id ORDER BY submit_date DESC";
        $stmt = $pdo->prepare($sql);

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->bindParam(":page_id", $page_id, PDO::PARAM_STR);

        $stmt->execute();

        $result = [];

        while ($row=$stmt->fetch()) {
            $result[] = array(
                'id'=>$row['id'],
                'page_id'=>$row['page_id'],
                'parent_id'=>$row['parent_id'],
                'name'=>$row['name'],
                'content'=>$row['content'],
                'submit_date'=>$row['submit_date']
            );
        }

        return $result;
    }
}

?>