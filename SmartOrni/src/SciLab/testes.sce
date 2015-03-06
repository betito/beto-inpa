
localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
//disp(numfiles)
//disp(y)

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
data = read(listoffiles(1,1) + ".dat", -1,240000)

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
for  i = 1:2
    filename = listoffiles(1,i)
    disp(filename)
    [x,y] = loadwave(filename)
    [linhas, colunas] = size(x)
//    disp(x)
    disp(y)
    disp(linhas)
    disp(colunas)
end
    
disp ("Fim...")

