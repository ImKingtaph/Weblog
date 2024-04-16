<?php
function getPublishedPosts()
{
    global $conn;
    $sql = "SELECT * FROM posts WHERE published=true"; 
    $result = mysqli_query($conn, $sql);

    $posts = array();

    if ($result) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            $topic = getPostTopic($row['id']);
            $row['topic'] = $topic;
            unset($row['body']);
            $posts[] = $row;
        }
    }

    return $posts;
}

function getPostTopic($post_id)
{
    global $conn;
    $sql = "SELECT * FROM topics JOIN post_topic ON topics.id=post_topic.topic_id WHERE post_id=$post_id";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $topic = mysqli_fetch_assoc($result);
        return $topic; // Return the entire topic
    } else {
        return null; // Return null if the topic is not found
    }
}

function getPost($slug)
{
    global $conn;
    $post_slug = $_GET['post-slug'];
    $sql = "SELECT * FROM posts WHERE slug='$post_slug'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['body'];
    } else {
        return null;
    }

}

function getAllTopics()
{
    global $conn;
    $sql = "SELECT * FROM topics";
    $result = mysqli_query($conn, $sql);
    $topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $topics;
}
?>