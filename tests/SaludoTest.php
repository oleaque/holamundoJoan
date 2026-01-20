<?php 
use PHPUnit\Framework\TestCase; 
use App\Saludo; 

class SaludoTest extends TestCase 
{ 
    // TEST 1: Comprueba que el mensaje del saludo sea correcto
    public function testElSaludoTieneFormatoCorrecto() 
    { 
        $saludo = new Saludo(); 
        $resultado = $saludo->generarSaludoAleatorio(); 
        
        // Verifica que el resultado es un string 
        $this->assertIsString($resultado['saludo']); 
        // Verifica que el resultado contiene un saludo válido 
        $this->assertNotEmpty($resultado['saludo']); 
    } 

    // TEST 2: Comprueba que el código del idioma sea correcto
    public function testElCodigoTieneFormatoCorrecto()
    {
        $saludo = new Saludo(); 
        $resultado = $saludo->generarSaludoAleatorio(); 

        // Verifica que el código también es un string 
        $this->assertIsString($resultado['codigo']); 
        // Verifica que el código no esté vacío 
        $this->assertNotEmpty($resultado['codigo']); 
    }
}