<?php
function recursiveDelete($path) {
        if (!file_exists("$path")) {
                return 2;
        }
        if (is_file("$path")) {
                unlink("$path");
        }
        else {
                $dir = scandir("$path");
                foreach ($dir as $x) {
                        if ($x == ".") {
                                continue;
                        }
                        elseif ($x == "..") {
                                continue;
                        }
                        else {
                                recursiveDelete("$path/$x");
                        }
                }
                echo "Removing directory $path\n";
                rmdir("$path");
        }
}
?>
