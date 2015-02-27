if getos() == 'Windows' then unix('del *.dat');
else unix('rm -f *.dat'); end


localdir="./*.wav"
listoffiles = listfiles(localdir)
//disp(listoffiles(:))

[numfiles, y] = size(listoffiles)
disp(numfiles)
disp(y)

for  i = 1 : numfiles
    filename = listoffiles(i, y)
    disp(filename)
    data = wavread(filename)
    write(filename + ".dat", data)
    data = 0
end

disp ("Fim...")
