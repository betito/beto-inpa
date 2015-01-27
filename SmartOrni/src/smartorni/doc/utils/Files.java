package smartorni.doc.utils;


import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class Files {

	public static String readFile (String logfile) {
		StringBuffer datas = new StringBuffer();
		try {  
             FileReader fr = new FileReader(logfile);  

             BufferedReader br = new BufferedReader(fr);  
             String temp;  
             try {
				temp = br.readLine();
	            while (temp != null) {
	            	//System.out.println(temp);
	                datas.append(temp + "\n");
	                temp = br.readLine();
	            }
              } catch (IOException e) {
 				// TODO Auto-generated catch block
 				e.printStackTrace();
 			 }
         }  
         catch (FileNotFoundException e1) {  
             System.out.println("File not found!");  
         }
         
         return datas.toString();
	}
	
	public static BufferedWriter openFileToWrite (String filename) {
		FileWriter out;  
		BufferedWriter p = null;  
		try{  
			 out = new FileWriter(filename, false);  
			 p = new BufferedWriter (out);
		} catch(Exception e) {  
			System.err.println(e);  
		}  
		return p;
	}

	public static BufferedWriter openFileToAppend(String outputdata) {
		FileWriter out;  
		BufferedWriter p = null;  
		try{  
			 out = new FileWriter(outputdata, true);  
			 p = new BufferedWriter (out);
		} catch(Exception e) {  
			System.err.println(e);  
		}  
		return p;
	}  
}
