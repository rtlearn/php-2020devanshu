<?php


    $prev = file_get_contents('./files/server.txt');
    $curr = file_get_contents(('https://github.com/timeline'));
    
    
    if($prev != $curr){
    
        require_once('./database.php');

        $query = "select * from users where active = 1";
        $result = $connection->query($query);

        if($result->num_rows > 0){

            $users = [];

            while($row = mysqli_fetch_assoc($result)){

                $msg = "<html>
                    <body>
                        Hey, There is an update in the timeline.<br />
                        <br />
                        <br />
                        <br />
                        Click <a href = 'http://localhost/git-hub/deregister.php' target='_BLANK'>here</a> to unsubscribe
                    </body>
                </html>";
                // $msg = "<html>
                //     <body>
                //         Hey, There is an update in the timeline.<br />
                //         <br />
                //         <br />
                //         <br />
                //         Click <a href = 'http://localhost/git-hub/deregister.php?t=" . $row['token'] . "' target='_BLANK'>here</a> to unsubscribe
                //     </body>
                // </html>";

                $users[] = [
                    'email'     =>  $row['email'],
                    'message'   =>  $msg
                ];

            }

            $file = fopen('./files/server.txt', 'w');
            fwrite($file, $curr);
            fclose($file);

            require_once('./mail.php');
            
            foreach($users as $user){
                
                // php mailer call
                $mail->addAddress($user['email']);
                $mail->Subject = 'Github Timeline Tracker';
                $mail->msgHTML($user['message']);
    
                if (!$mail->send()) {
                    echo 'Mailer Error: ' . $mail->ErrorInfo . '<br />';
                } else {
                    echo 'Message sent to => ' . $user['email'] . '<br />';
                }

            }

        }

    }else{
        echo "No changes found";
    }