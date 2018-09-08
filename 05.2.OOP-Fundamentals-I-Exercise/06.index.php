<?php
/*
Create an online radio station database. It should keep information about all added songs.
On the first line you are going to get the number of songs you are going to try adding.
On the next lines you will get the songs to be added in the format <artist name>;<song name>;
<minutes:seconds>. To be valid, every song should have an artist name, a song name and length.
Design a custom exception hierarchy for invalid songs:
•	InvalidSongException
o	InvalidArtistNameException
o	InvalidSongNameException
o	InvalidSongLengthException
	InvalidSongMinutesException
	InvalidSongSecondsException
 */

include '06.InvalidSong.php';

$n = intval(fgets(STDIN));
$totalSongs = 0;
$totalSongsDuration = 0;
for($i = 0; $i < $n; $i++){
    try {
        $input = explode(';', fgets(STDIN));

        $artist_name = trim($input[0]);
        $song_name = trim($input[1]);
        $minutes = trim($input[2]);

        if(empty($artist_name) || empty($song_name) || empty($minutes)){
            throw new Exception('Invalid song!');
        }

        $time = explode(':', $minutes);
        $mins = $time[0];
        $secs = $time[1];

        $song = new InvalidSong($artist_name, $song_name, $mins, $secs);

        echo 'Song added.' .PHP_EOL;
        $totalSongs++;
        $totalSongsDuration += $song->getDuration();

    } catch (Exception $e){
        echo $e->getMessage() . PHP_EOL;
    }
}
echo "Songs added: $totalSongs" . PHP_EOL;

$hours = floor(floor($totalSongsDuration / 60) / 60);
$minutes = str_pad(floor($totalSongsDuration / 60) % 60, 2, "0", STR_PAD_LEFT);
$seconds = str_pad($totalSongsDuration % 60, 2, "0", STR_PAD_LEFT);
print "Playlist length: " . "{$hours}h {$minutes}m {$seconds}s";
