<?php

/* use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW public.view_gfuncionario
                AS
            SELECT a.id_funcionario,
                a.nome_funcionario,
                a.sexo,
                b.id_municipio,
                b.municipio,
                c.id_posto_administrativo,
                c.posto_administrativo,
                d.id_sucos,
                d.sucos,
                e.id_aldeias,
                e.aldeias,
                e.codigo_aldeias,
                a.data_moris,
                a.nacionalidade,                
                a.categoria,
                a.ano_inicio,
                f.id_tipo_categoria,
                a.observacao,
                a.controlo_estado,
                a.no_contacto,
                a.email
            FROM funcionario a
                LEFT JOIN gdivisao_administrativa_municipio b ON b.id_municipio = a.id_municipio
                LEFT JOIN gdivisao_administrativa_posto_administrativo c ON c.id_posto_administrativo = a.id_posto_administrativo
                LEFT JOIN gdivisao_administrativa_sucos d ON d.id_sucos = a.id_suco
                LEFT JOIN gdivisao_administrativa_aldeias e ON e.id_aldeias = a.id_aldeias
                LEFT JOIN tipo_categoria_admin f ON f.id_tipo_categoria = a.id_tipo_categoria;
        ");
    }

    public function down()
    {
        // DB::statement('DROP TABLE IF EXISTS gdivisao_administrativa_municipio');
        // DB::statement('DROP TABLE IF EXISTS gdivisao_administrativa_posto_administrativo');
        // DB::statement('DROP TABLE IF EXISTS gdivisao_administrativa_aldeias');
        // DB::statement('DROP TABLE IF EXISTS gdivisao_administrativa_sucos');
        DB::statement("DROP VIEW IF EXISTS view_gfuncionario");
    }
}; */
