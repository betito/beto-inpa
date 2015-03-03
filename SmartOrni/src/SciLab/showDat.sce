
localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
disp(numfiles)
disp(y)

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
data = read(listoffiles(1,1) + ".dat", -1,240000)

subplot(311)
plot2d(data(1,:))
subplot(312)
plot2d(data(2,:))
subplot(313)
plot2d(data(3,:))

disp ("Fim...")

