<?php
        function recursiveCopy($src,$tar) {
                if (is_file($src)) {
                        copy($src,$tar);
                }
                else {
                        if (!file_exists($tar)) {
                                mkdir($tar);
                        }
                        $dir = array_reverse(scandir($src));
                        if (count($dir) > 2) {
                                foreach ($dir as $x) {
                                        if ($x == ".") {
                                                continue;
                                        }
                                        elseif ($x == "..") {
                                                continue;
                                        }
                                        echo "$src/$x\n";
                                        recursiveCopy("$src/$x","$tar/$x");
                                }
                        }
                }
        }
?>
