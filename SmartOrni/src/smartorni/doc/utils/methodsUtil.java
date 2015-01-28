package smartorni.doc.utils;



public class methodsUtil {

	public static String clearString (String input) {
		
		String aux = input.replaceAll("\\s+", " ");
		return aux.trim();
	}
}
