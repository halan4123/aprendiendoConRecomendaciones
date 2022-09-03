<?php

require 'connectionController.php';

if (isset($_POST['action'])) {

    $youtubeController = new YoutubeController();

    switch ($_POST['action']) {

        case 'store':
            $channel_name = strip_tags($_POST['channel_name']);
            $url_video = strip_tags($_POST['url_video']);
            $url_channel = strip_tags($_POST['url_channel']);
            $text = strip_tags($_POST['text']);
            $level = strip_tags($_POST['level']);

            $youtubeController->store($channel_name, $url_video, $url_channel, $text, $level);
            //echo $channel_name . " - " . $url_video . " - " . $url_channel . " - " . $text . " - " .  $level;
            break;

        case 'update':
            $id = strip_tags($_POST['id']);
            $channel_name = strip_tags($_POST['channel_name']);
            $url_video = strip_tags($_POST['url_video']);
            $url_channel = strip_tags($_POST['url_channel']);
            $text = strip_tags($_POST['text']);
            $level = strip_tags($_POST['level']);
            //echo $id . " - "  . $channel_name . " - " . $url_video . " - " . $url_channel . " - " . $text . " - " .  $level;

            $youtubeController->update($id, $channel_name, $url_video, $url_channel, $text, $level);
            break;

        case 'destroy':

            $id = strip_tags($_POST['id']);

            $youtubeController->destroy($id);
            break;
    }
}

$conn = connect();

class YoutubeController
{

    public function get()
    {

        $conn = connect();

        if ($conn->connect_error == false) {

            $query = "select * from youtube";
            $prepared_query = $conn->prepare($query);
            $prepared_query->execute();

            $results = $prepared_query->get_result();
            $youtubes = $results->fetch_all(MYSQLI_ASSOC);

            if (count($youtubes) > 0) {
                return $youtubes;
            } else {
                return array();
            }
        } else
            return array();
    }

    public function store($channel_name, $url_video, $url_channel, $text, $level)
    {

        $conn = connect();

        if ($conn->connect_error == false) {

            if ($channel_name != "" && $url_video != "" && $url_channel != "" && $text != "" && $level != "") {

                $query = "insert into youtube(channel_name, url_video, url_channel, text, level) values(?,?,?,?,?)";

                $prepared_query = $conn->prepare($query);
                $prepared_query->bind_param('sssss', $channel_name, $url_video, $url_channel, $text, $level);

                if ($prepared_query->execute()) {
                    header("location:" . $_SERVER['HTTP_REFERER']);
                    //$_SESSION['success'] = "el registro se ha guardado correctamente";
                } else {
                    //$_SESSION['error'] = 'verifique los datos envíados';
                    header("location:" . $_SERVER['HTTP_REFERER']);
                }
            } else {
                //$_SESSION['error'] = 'verifique los datos envíados';
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
        } else {
            //$_SESSION['error'] = 'verifique los datos envíados';
            header("location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    public function update($id, $channel_name, $url_video, $url_channel, $text, $level)
    {
        $conn = connect();

        if ($conn->connect_error == false) {

            if ($id != "" && $channel_name != "" && $url_video != "" && $url_channel != "" && $text != "" && $level != "") {

                $query = "update youtube set channel_name = ?, url_video = ?, url_channel = ?, text = ?, level = ? where id = ?";

                $prepared_query = $conn->prepare($query);
                $prepared_query->bind_param('sssssi', $channel_name, $url_video, $url_channel, $text, $level, $id);

                if ($prepared_query->execute()) {
                    header("location:" . $_SERVER['HTTP_REFERER']);
                } else {
                    header("location:" . $_SERVER['HTTP_REFERER']);
                    
                }
            } else {
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
        } else {
            header("location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    public function destroy($id)
    {

        $conn = connect();

        if ($conn->connect_error == false) {

            if ($id != "") {

                $query = "delete from youtube where id = ?";
                $prepared_query = $conn->prepare($query);
                $prepared_query->bind_param('i', $id);
                if ($prepared_query->execute()) {

                    header("Location:" . $_SERVER['HTTP_REFERER']);

                } else {
                    header("Location:" . $_SERVER['HTTP_REFERER']);
                }
            } else {
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        } else {
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }


    public function contar_row()
    {

        $conn = connect();

        if ($conn->connect_error == false) {

            $query = "select * from youtube";
            $prepared_query = $conn->prepare($query);
            $prepared_query->execute();

            $results = $prepared_query->get_result();
            $youtubes = $results->fetch_all(MYSQLI_ASSOC);

            if (count($youtubes) > 0) {
                return count($youtubes);
            } else {
                return array();
            }
        } else
            return array();
    }
}
