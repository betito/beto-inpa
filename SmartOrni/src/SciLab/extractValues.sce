if getos() == 'Windows' then unix('del *.dat');
else unix('rm -f *.dat'); end


localdir="./*.wav"
listoffiles = listfiles(localdir)
disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
//disp(numfiles)
//disp(y)

for  i = 1:2
    filename = listoffiles(1:i)
    disp(filename)
    data = loadwave(filename)
//    write(filename + ".dat", data)
    data = 0
end

disp ("Fim...")

