// extract channels and save waves

if getos() == 'Windows' then unix('del *.dat');
else unix('rm -f *.dat'); end

stacksize(15000000)

localdir="./*.wav"
listoffiles = listfiles(localdir)
//listoffiles = ["_Inambari-Tambopata__Antwren_0.wav", "Papa-formiga-barrado_7.wav"]

//disp(listoffiles(:))
[numfiles, y] = size(listoffiles)
disp("Num F:" + string(numfiles))
disp("Y  :" + string(y))
disp("-----------------------------")

for  i = 11:numfiles
    filename = listoffiles(i,1)
    disp(string(i) + " :: " + filename)
    [data, Fs, bits]  = wavread(filename)
    [lins, tam] = size(data)
    disp("Lins:" + string(lins))
    disp("Tam  :" + string(tam))
//    write(filename + ".dat", data)
//    opendat = read(filename + ".dat", -1, tam)
//    disp("Linhas : " + string(lins))
//    disp("Tam : " + string(tam))
    for c = 1:lins
        outputfile = filename + "_ch_" + string(c) + ".dat"
        vec = data(c,:)
        write(outputfile, vec)
        disp(outputfile)
        savewave (outputfile + ".wav", vec)
        vec  = 0
    end
    data = 0
    Fs = 0
    bits = 0
    lins = 0
    tam = 0
//    opendat = 0

    disp(".......................")   
end

disp ("Fim...")


