<?

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Execute the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do cliente
            $table->string('email')->unique(); // Email único
            $table->string('telefone')->nullable(); // Telefone, opcional
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverte a migração.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
