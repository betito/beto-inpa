
for c in `ls $1/*.mp3`
do
	echo $c
	x="`basename $c .mp3`.wav"
	echo $x
	/cygdrive/c/Program\ Files\ \(x86\)/VideoLAN/VLC/vlc.exe --sout "#transcode{acodec=s16l,channels=2,samplerate=44100}:std{access=file,mux=wav,dst=$x}" $c vlc://quit
done
	
