
localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
disp(numfiles)
disp(y)

listoffiles = ["_Inambari-Tambopata__Antwren_0.wav" "Papa-formiga-barrado_7.wav"]
data = read(listoffiles(1,1) + ".dat", -1,240000)

//subplot(311)
//plot(data(1,:), 'r.')
//subplot(312)
//plot(data(2,:), 'g.')
//subplot(313)
//plot(data(3,:), 'b.')

savewave('tmp1.wav', data(1,:))
savewave('tmp2.wav', data(2,:))
savewave('tmp3.wav', data(3,:))

disp ("Fim...")

