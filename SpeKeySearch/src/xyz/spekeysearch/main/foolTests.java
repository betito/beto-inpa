package xyz.spekeysearch.main;

import xyz.spekeysearch.index.TermFreq;

public class foolTests {

	public static void main(String[] args) {

		TermFreq tf = new TermFreq();
		
		tf.insertData("d1", "a");
		tf.insertData("d1", "b");
		tf.insertData("d1", "a");
		tf.insertData("d2", "c");
		tf.insertData("d2", "c");
		tf.insertData("d2", "c");
		tf.insertData("d2", "c");
		tf.insertData("d2", "c");
		
		System.out.println(tf.getFreq("d2", "c"));
		
	}

}
