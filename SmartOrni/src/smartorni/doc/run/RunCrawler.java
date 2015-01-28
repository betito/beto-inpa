package smartorni.doc.run;

import smartorni.doc.utils.Files;
import smartorni.doc.wrap.WrapperXenoCanto;

public class RunCrawler {

	public static void main(String[] args) {

		String input = Files.readFile("./bases/xenocanto/page1.html");
		WrapperXenoCanto wxc = new WrapperXenoCanto(new StringBuilder(input)); 
		wxc.extractData();
		
		System.out.println("...FIM...");
		
	}

}
