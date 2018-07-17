<!-- ========================================= -->
<!-- ============= View All Comments ============ -->
<!-- ========================================= -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Comment_Id</th>
            <th>Post_Id</th>
            <th>Author</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Date</th>
            <th>In Response to</th>
            <th>Approve</th>
            <th>Unapprove</th>
            <th>Delete</th>
           

        </tr>
    </thead>
    <tbody>
        
       <?php //show all comments
       error_reporting(1);
       $query = "SELECT * FROM comments";
       $result = mysql_query($query);
             while ($row = mysql_fetch_assoc($result)) {
                $comment_id = $row['comment_id'];
                $comment_post_id = $row['comment_post_id'];
                $comment_author = $row['comment_author'];
                $comment_email = $row['comment_email'];
                $comment_content = $row['comment_content'];
                $comment_date = $row['comment_date'];
               
                echo "<tr>";
                echo "<td>{$comment_id}</td>";
                echo "<td>{$comment_post_id}</td>";
                echo "<td>{$comment_author}</td>";
                echo "<td>{$comment_email}</td>";
                echo "<td>{$comment_content}</td>";
                echo "<td>{$comment_date}</td>";
                echo "<td>some title</td>";

                echo "<td><a href='admin_comments.php?delete={}'>Approve</a></td>";
                echo "<td><a href='admin_comments.php?source=edit_posts&p_id={}'>Unapprove</a></td>";
                echo "<td><a href='admin_comments.php?delete={}'>Delete</a></td>";
                echo "</tr>";
            }

        ?>

        <?php //delete posts PHP
            if(isset($_GET['delete'])){
            $del_id = $_GET['delete'];
            $query = "DELETE FROM post WHERE post_id = {$del_id} ";
            $result = mysql_query($query);
           
            } 
        ?><!-- delete category PHP -->
        
    </tbody>
</table>