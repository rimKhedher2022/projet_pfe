<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Enum;

class CreateDatabaseMgration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // les etudiants
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('annee_scolaire');/* */ 
            $table->date('date_debut');/* */ 
            $table->date('date_fin');/* */       
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');/* */
            $table->string('prenom');/* */
            $table->string('email')->unique();/* */
            $table->string('password');/* */
            $table->string('cin');
            $table->string('image')->nullable();/* */
            $table->string('niveau');//à modifier
            $table->string('specialite');//à modifier
         
            $table->timestamps();
        });
       /* INscription */
  /*      Schema::create('user_sessions', function (Blueprint $table) {
        $table->id();
         $table->foreignId('session_id')->constrained('sessions')->onUpdate('cascade')->onDelete('cascade');
         $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
         $table->foreignId('stage_id')->constrained('stages')->onUpdate('cascade')->onDelete('cascade');
         $table->enum('resultat', ['valide', 'non valide']);
         $table->timestamps();
    }); */
/* Employes */
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('image')->nullable(); 
            $table->string('password');
            $table->timestamps();
        });

// un enseignant valide plusieurs stage et un stage est validé par un seul enseignant
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('password');
            $table->timestamps();
        });


       



       
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('telephone');
            $table->string('adresse');
            $table->timestamps();
        });


        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['pfe', 'pfa','ete'])->default('ete');
            $table->string('sujet');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->date('date_soutenance')->nullable();
           /*  $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade')->onUpdate('cascade'); */
// session_id
            $table->foreignId('societe_id')->constrained('societes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

      
// Responsablité des enseignants qui vont valider les stages
        Schema::create('enseignant_stages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stage_id')->constrained('stages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('enseignant_id')->constrained('enseignants')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->foreignId('stage_id')->constrained('stages')->onUpdate('cascade')->onDelete('cascade');
            $table->string('filePath');
            $table->date('date_depot');


            $table->enum('etat', ['creation','a coorige', 'valide']);
            $table->timestamps();
        });


    Schema::create('stage_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('stage_id')->constrained('stages')->onUpdate('cascade')->onDelete('cascade');
            
            // resultat 
            // session_id

            $table->timestamps();
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('stage_users');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('enseignants');
        Schema::dropIfExists('rapports');
        Schema::dropIfExists('societes');
        Schema::dropIfExists('stages');
        Schema::dropIfExists('affectations');
        
    }
}
