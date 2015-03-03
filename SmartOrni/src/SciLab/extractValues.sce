if getos() == 'Windows' then unix('del *.dat');
else unix('rm -f *.dat'); end


localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
disp(numfiles)
disp(y)

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
for  i = 1:2
    filename = listoffiles(i:1)
    disp(filename)
    data = wavread(filename)
    write(filename + ".dat", data)
    data = 0
end

disp ("Fim...")

