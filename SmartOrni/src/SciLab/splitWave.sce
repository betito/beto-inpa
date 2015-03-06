if getos() == 'Windows' then unix('del *.dat');
else unix('rm -f *.dat'); end


localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
[y, numfiles] = size(listoffiles)
disp(numfiles)
disp(y)


for  i = 1:numfiles
    filename = listoffiles(i:1)
    disp(filename)
    data = loadwave(filename)
    [lins, tam] = size(data)
    write(filename + ".dat", data)
    opendat = read(filename + ".dat", -1, tam)
    disp("Linhas : " + string(lins))
    disp("Tam : " + string(tam))
    for c = 1:lins
//        write(filename + string(c) + ".dat", opendat(c:,))
        disp(filename + string(c) + ".dat")
    end
    data = 0
    opendat = 0
end

disp ("Fim...")

