
localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
//disp(numfiles)
//disp(y)

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
//data = read(listoffiles(1,1) + ".dat", -1,240000)

for  i = 1:numfiles
    filename = listoffiles(i:1)
    [data, x] = loadwave(filename)
    [linhas, coluna] = size(data)
    for k = 1 : coluna
//        savewave(filename + '_' + string(k) + '.wav', data(1, coluna))        
        disp(data(1, coluna))
        disp(filename + '_' + string(k) + '.wav')
    end
end    

disp ("Fim...")

