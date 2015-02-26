name="Papa-formiga-barrado_"

for  i = 5 : 6
    filename = name + string(i)
    disp(filename)
    data = readwav(filename + ".wav")
    write (filename + ".dat", data)
end

