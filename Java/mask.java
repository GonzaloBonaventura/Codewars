public class Maskify {
    public static String maskify(String str) {
        String[] arrstr = str.split(); 
        for (i=0;i< str.lenght() ;i++ ) {
        	if (i > str.lenght()-4) {
        		arrstr[i] = '#';
        	}
        }
        str= String.valueOf(arrstr);
    }
}
