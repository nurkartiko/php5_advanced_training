<?php

print "aplikasi pengulangan sederhana";
print "\n";

fwrite(STDOUT, "masukkan nilai awal: ");
$i = fgetc(STDIN);
while ($i < 10000){
    print $i."\t";
    sleep(1);
    $i++;
}

print "\n";
fwrite(STDOUT, "perulangan sdh berakhir");

exit(0);

?>