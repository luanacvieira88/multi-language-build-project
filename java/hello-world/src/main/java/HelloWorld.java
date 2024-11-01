public class HelloWorld {
    public String getMessage() {
        return "Hello, World!";
    }

    // Método principal (main)
    public static void main(String[] args) {
        HelloWorld helloWorld = new HelloWorld();
        System.out.println(helloWorld.getMessage());
    }
}
