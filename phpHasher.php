<?php


if ((array_search('help', $argv, TRUE)) == TRUE)
{
    echo "\nUsage: algorithm filename\n\n";
    echo "Example: 'md5 file.txt' or sha256 /home/user/file.jpg'\n\n";
    echo "Supported Hashing Algorithms: md4,md5,sha1,sha224,sha256,sha384,sha512/224,sha512/256,sha512,sha3-224,sha3-256,sha3-384,sha3-512,ripemd128,ripemd160,ripemd256,ripemd320,whirlpool,tiger128,3,tiger160,3,tiger192,3,tiger128,4,tiger160,4,tiger192,4,snefru,snefru256,gost,gost-crypto,adler32,crc32,crc32b,crc32c,fnv132,fnv1a32,fnv164,fnv1a64,joaat,haval128,3,haval160,3,haval192,3,haval224,3,haval256,3,haval128,4,haval160,4,haval192,4,haval224,4,haval256,4,haval128,5,haval160,5,haval192,5,haval224,5,haval256,5\n\n";
    exit ();
}

$algo = strtolower($argv[1]);
$file=$argv[2];

//print_r(hash_algos());


if(file_exists($file))
{
    if ((array_search($algo, hash_algos(), TRUE)) == TRUE) 
        {
            echo "\n".hash_file($algo,$file)."\n\n";
        }
    else
        {
            echo "\nUnsupported hashing algorithm. Enter 'help' for a list of supported algorithms\n\n";
        }
}
    
else 
{
    echo "\nCant read the file ".$file." Please verify the filename. Type'help' for more informtion\n\n";
}

?>