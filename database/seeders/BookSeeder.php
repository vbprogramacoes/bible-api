<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = array(
            'gn' => array(
                'book'          => 'Gênesis',
                'abbreviation'  => 'Gn',
                'chapters'      => '50',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ex' => array(
                'book'          => 'Êxodo',
                'abbreviation'  => 'Êx',
                'chapters'      => '40',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'lv' => array(
                'book'          => 'Levítico',
                'abbreviation'  => 'Lv',
                'chapters'      => '27',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'nm' => array(
                'book'          => 'Números',
                'abbreviation'  => 'Nm',
                'chapters'      => '36',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'dt' => array(
                'book'          => 'Deuteronômio',
                'abbreviation'  => 'Dt',
                'chapters'      => '34',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'js' => array(
                'book'          => 'Josué',
                'abbreviation'  => 'Js',
                'chapters'      => '24',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'jz' => array(
                'book'          => 'Juízes',
                'abbreviation'  => 'Jz',
                'chapters'      => '21',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'rt' => array(
                'book'          => 'Rute',
                'abbreviation'  => 'Rt',
                'chapters'      => '4',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '1sm' => array(
                'book'          => '1 Samuel',
                'abbreviation'  => '1Sm',
                'chapters'      => '31',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '2sm' => array(
                'book'          => '2 Samuel',
                'abbreviation'  => '2Sm',
                'chapters'      => '24',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '1rs' => array(
                'book'          => '1 Reis',
                'abbreviation'  => '1Rs',
                'chapters'      => '22',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '2rs' => array(
                'book'          => '2 Reis',
                'abbreviation'  => '2Rs',
                'chapters'      => '25',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '1cr' => array(
                'book'          => '1 Crônicas',
                'abbreviation'  => '1Cr',
                'chapters'      => '29',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '2cr' => array(
                'book'          => '2 Crônicas',
                'abbreviation'  => '2Cr',
                'chapters'      => '36',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            '2cr' => array(
                'book'          => '2 Crônicas',
                'abbreviation'  => '2Cr',
                'chapters'      => '36',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ed' => array(
                'book'          => 'Esdras',
                'abbreviation'  => 'Ed',
                'chapters'      => '10',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ne' => array(
                'book'          => 'Neemias',
                'abbreviation'  => 'Ne',
                'chapters'      => '13',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'et' => array(
                'book'          => 'Ester',
                'abbreviation'  => 'Et',
                'chapters'      => '10',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'jó' => array(
                'book'          => 'Jó',
                'abbreviation'  => 'Jó',
                'chapters'      => '42',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'sl' => array(
                'book'          => 'Salmos',
                'abbreviation'  => 'Sl',
                'chapters'      => '150',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'pv' => array(
                'book'          => 'Provérbios',
                'abbreviation'  => 'Pv',
                'chapters'      => '31',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ec' => array(
                'book'          => 'Eclesiastes',
                'abbreviation'  => 'Ec',
                'chapters'      => '12',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ct' => array(
                'book'          => 'Cantares de Salomão',
                'abbreviation'  => 'Ct',
                'chapters'      => '8',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'is' => array(
                'book'          => 'Isaías',
                'abbreviation'  => 'Is',
                'chapters'      => '66',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'jr' => array(
                'book'          => 'Jeremias',
                'abbreviation'  => 'Jr',
                'chapters'      => '52',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'lm' => array(
                'book'          => 'Lamentações de Jeremias',
                'abbreviation'  => 'Lm',
                'chapters'      => '5',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ez' => array(
                'book'          => 'Ezequiel',
                'abbreviation'  => 'Ez',
                'chapters'      => '48',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'dn' => array(
                'book'          => 'Daniel',
                'abbreviation'  => 'Dn',
                'chapters'      => '12',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'os' => array(
                'book'          => 'Oséias',
                'abbreviation'  => 'Os',
                'chapters'      => '14',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'jl' => array(
                'book'          => 'Joel',
                'abbreviation'  => 'Jl',
                'chapters'      => '3',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'am' => array(
                'book'          => 'Amós',
                'abbreviation'  => 'Am',
                'chapters'      => '9',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ob' => array(
                'book'          => 'Obadias',
                'abbreviation'  => 'Ob',
                'chapters'      => '1',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'jn' => array(
                'book'          => 'Jonas',
                'abbreviation'  => 'Jn',
                'chapters'      => '4',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'mq' => array(
                'book'          => 'Miquéias',
                'abbreviation'  => 'Mq',
                'chapters'      => '7',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'na' => array(
                'book'          => 'Naum',
                'abbreviation'  => 'Na',
                'chapters'      => '3',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'hc' => array(
                'book'          => 'Habacuque',
                'abbreviation'  => 'Hc',
                'chapters'      => '3',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'sf' => array(
                'book'          => 'Sofonias',
                'abbreviation'  => 'Sf',
                'chapters'      => '3',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ag' => array(
                'book'          => 'Ageu',
                'abbreviation'  => 'Ag',
                'chapters'      => '2',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'zc' => array(
                'book'          => 'Zacarias',
                'abbreviation'  => 'Zc',
                'chapters'      => '14',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ml' => array(
                'book'          => 'Malaquias',
                'abbreviation'  => 'Ml',
                'chapters'      => '4',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'ml' => array(
                'book'          => 'Malaquias',
                'abbreviation'  => 'Ml',
                'chapters'      => '4',
                'testament'     => 'old',
                'language'      => 'portuguese'
            ),
            'mt' => array(
                'book'          => 'Mateus',
                'abbreviation'  => 'Mt',
                'chapters'      => '28',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'mc' => array(
                'book'          => 'Marcos',
                'abbreviation'  => 'Mc',
                'chapters'      => '16',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'lc' => array(
                'book'          => 'Lucas',
                'abbreviation'  => 'Lc',
                'chapters'      => '24',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'jo' => array(
                'book'          => 'João',
                'abbreviation'  => 'Jo',
                'chapters'      => '21',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'at' => array(
                'book'          => 'Atos dos Apóstolos',
                'abbreviation'  => 'At',
                'chapters'      => '28',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'rm' => array(
                'book'          => 'Romanos',
                'abbreviation'  => 'Rm',
                'chapters'      => '16',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '1co' => array(
                'book'          => '1 Coríntios',
                'abbreviation'  => '1Co',
                'chapters'      => '16',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '2co' => array(
                'book'          => '2 Corintíos',
                'abbreviation'  => '2Co',
                'chapters'      => '13',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'gl' => array(
                'book'          => 'Gálatas',
                'abbreviation'  => 'Gl',
                'chapters'      => '6',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'ef' => array(
                'book'          => 'Efésios',
                'abbreviation'  => 'Ef',
                'chapters'      => '6',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'fp' => array(
                'book'          => 'Filipenses',
                'abbreviation'  => 'Fp',
                'chapters'      => '4',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'cl' => array(
                'book'          => 'Colossenses',
                'abbreviation'  => 'Cl',
                'chapters'      => '4',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '1ts' => array(
                'book'          => '1 Tessalonicenses',
                'abbreviation'  => '1Ts',
                'chapters'      => '5',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '2ts' => array(
                'book'          => '2 Tessalonicenses',
                'abbreviation'  => '2Ts',
                'chapters'      => '3',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '1tm' => array(
                'book'          => '1 Timóteo',
                'abbreviation'  => '1Tm',
                'chapters'      => '6',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '2tm' => array(
                'book'          => '2 Timóteo',
                'abbreviation'  => '2Tm',
                'chapters'      => '4',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'tt' => array(
                'book'          => 'Tito',
                'abbreviation'  => 'Tt',
                'chapters'      => '3',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'fm' => array(
                'book'          => 'Filemon',
                'abbreviation'  => 'Fm',
                'chapters'      => '1',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'hb' => array(
                'book'          => 'Hebreus',
                'abbreviation'  => 'Hb',
                'chapters'      => '13',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'tg' => array(
                'book'          => 'Tiago',
                'abbreviation'  => 'Tg',
                'chapters'      => '5',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '1pe' => array(
                'book'          => '1 Pedro',
                'abbreviation'  => '1Pe',
                'chapters'      => '5',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '2pe' => array(
                'book'          => '2 Pedro',
                'abbreviation'  => '2Pe',
                'chapters'      => '3',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '1jo' => array(
                'book'          => '1 João',
                'abbreviation'  => '1Jo',
                'chapters'      => '5',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '2jo' => array(
                'book'          => '2 João',
                'abbreviation'  => '2Jo',
                'chapters'      => '1',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            '3jo' => array(
                'book'          => '3 João',
                'abbreviation'  => '3Jo',
                'chapters'      => '1',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'jd' => array(
                'book'          => 'Judas',
                'abbreviation'  => 'Jd',
                'chapters'      => '1',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
            'ap' => array(
                'book'          => 'Apocalipse',
                'abbreviation'  => 'Ap',
                'chapters'      => '22',
                'testament'     => 'new',
                'language'      => 'portuguese'
            ),
        );
        $summary = array(
            'gn' => array(
                'portuguese' => 'Este livro, que mostra como era "no princípio", faz uma narrativa da criação, da relação de Deus com o homem e da promessa de Deus a Abraão e seus descendentes.'
            ),
            'ex' => array(
                'portuguese' => 'O nome Êxodo significa "saída". Este livro conta como Deus livrou os israelitas de uma vida de penúrias e escravidão no Egito. Deus fez um pacto com eles e lhes deu leis para ordenar e governar sua vida.'
            ),
            'lv' => array(
                'portuguese' => 'O nome do livro se deriva do nome de uma das doze tribos de Israel. O livro registra todas as leis e regulamentos a respeito de rituais e cerimônias.'
            ),
            'nm' => array(
                'portuguese' => 'Os israelitas vagaram pelo deserto durante quarenta anos, antes de entrar em Canaã, "a terra prometida". O nome do livro se deriva dos censos promovidos durante esse tempo no deserto.'
            ),
            'dt' => array(
                'portuguese' => 'Moisés pronunciou três discursos de despedida pouco antes de morrer. Neles recapitulou, com o povo, todas as leis de Deus para os israelitas. O nome do livro expressa essa "recapitulação" ou "segunda lei".'
            ),
            'js' => array(
                'portuguese' => 'Josué foi o líder dos exércitos israelitas em suas vitórias sobre seus inimigos, os cananeus. O nome do livro termina descrevendo a divisão da terra entre as doze tribos de Israel.'
            ),
            'jz' => array(
                'portuguese' => 'Os israelitas constantemente desobedeciam a Deus e caíam nas mãos de paízes opressores. Deus constituiu juízes para livrá-los da opressão.'
            ),
            'rt' => array(
                'portuguese' => 'O amor e a dedicação de Rute à sua sogra, Noemi, são o tema deste livro.'
            ),
            '1sm' => array(
                'portuguese' => 'Samuel foi o líder de Israel no período compreendido entre os juízes e Saul, o primeiro rei. Quanto a liderança de Saul falhou, Samuel unigiu a Davi como rei.'
            ),
            '2sm' => array(
                'portuguese' => 'Sob o reinado de Davi, a nação se unificou e se fortaleceu. No entanto, deopis dos pecados de Davi, adultério e assassinato, tanto a nação como a família do rei sofreram muito.'
            ),
            '1rs' => array(
                'portuguese' => 'Este livro inicia com o reinado de Salomão em Israel.'
            ),
            '2rs' => array(
                'portuguese' => 'Israel foi conquistada pela Assíria em 721 a.C., e Judá, pela Babilônia, em 586 a.C., Estes acontecimentos foram considerados como um castigo ao opvo pela desobediência às leis de Deus.'
            ),
            '1cr' => array(
                'portuguese' => 'Este livro inicia com as genealogias de Adão até Davi e, em seguida, conta os acontecimentos do reinado de Davi.'
            ),
            '2cr' => array(
                'portuguese' => 'Este livro abrange o mesmo peíodo que 2 Reis, mas com ênfase em Judá, o Reino do Sul, e seus governantes.'
            ),
            'ed' => array(
                'portuguese' => 'Depois de estar cativo na Babilônia por algumas décadas, o povo de Deus retornou a Jerusalém. Um de seus líderes era Esdras. Este livro contém a admoestação que Esdras fez ao povo para que este seguisse e honrasse a lei de Deus.'
            ),
            'ne' => array(
                'portuguese' => 'Depois do templo, também foi reconstruída a muralha de Jesuralém. neemias foi quem dirigiu esse empreendimento. Ele também colaborou com Esdras para restaurar o fervor religioso do povo.'
            ),
            'et' => array(
                'portuguese' => 'Este livro relata a história de uma rainha judia da Pérsia, que denunciou um complô que visava destruir seus compatriotas. Com isso ela evitou que todos fossem aniquilados.'
            ),
            'jó' => array(
                'portuguese' => 'A pergunta "Por que sofrem os inocentes?" é tratada nesta história bíblica.'
            ),
            'sl' => array(
                'portuguese' => 'Estas 150 orações foram usadas pelos hebreus para expressar sua relação com Deus. Abrangem todo o campo das emoções humanas, desde a alegria até o ódio, da esperança ao desespero.'
            ),
            'pv' => array(
                'portuguese' => 'Este é um livro de máximas de sabedoria, de ensinamentos éticos e de sendo comum acerca de como viver uma vida reta.'
            ),
            'ec' => array(
                'portuguese' => 'Na sua busca por felicidade e pelo sentido da vida, este escritor, conhecido como "filósofo" ou "pregador", faz perguntas que continuam presentes na sociedade contemporânea.'
            ),
            'ct' => array(
                'portuguese' => 'Este poema descreve o gozo e o êxtase do amor. Simbolicamente tem sido aplicado ao amor de Deus por Israel e ao amor de Cristo pela igreja.'
            ),
            'is' => array(
                'portuguese' => 'O profeta Isaías trouxe a mensagem do juízo de Deus às nações, anunciou um rei futuro, à semelhança de Davi, e prometeu uma era de paz e tranquilidade.'
            ),
            'jr' => array(
                'portuguese' => 'Muito antes da destruição de Judá pela Babilônia, Jeremias predisse o justo juízo de Deus. Embora sua mensagem seja majoritariamente de destruição, Jeremias também falou do novo pacto com Deus.'
            ),
            'lm' => array(
                'portuguese' => 'Tal qual Jeremias havia predito, Jerusalém caiu cativa da Babilõnia. Este livro registra cinco "lamentos" pela cidade caída.'
            ),
            'ez' => array(
                'portuguese' => 'A mensagem de Ezequiel foi dada aos judeus cativos na Babilônia. Ezequiel usou histórias e parábolas para falar do juízo, da esperança e da restauração de Israel.'
            ),
            'dn' => array(
                'portuguese' => 'Daniel se manteve fiel a Deus, mesmo enfrentando muitas pressões quando cativo na Babilônia. Este livro inclui as visões proféticas de Daniel.'
            ),
            'os' => array(
                'portuguese' => "Oséias se vale de sua experiência conjugal, em que ele era dedicado à sua esposa, mesmo sabendo que ela lhe era infiel, para ilustrar o adultério que Israel tinha cometido contra Deus e para mostrar como o fiel amor de Deus pelo seu povo nunca muda."
            ),
            'jl' => array(
                'portuguese' => 'Depois de uma praga de gafanhotos, Joel admoesta o povo para que se arrependa.'
            ),
            'am' => array(
                'portuguese' => 'Durante um tempo de prosperidade, este profeta de Judá pregou aos ricos líderes de Israel sobre o juízo de Deus; insistia em que pensassem nos pobres e oprimidos, antes de pensarem em sua própria satisfação.'
            ),
            'ob' => array(
                'portuguese' => 'Obadias profetizou o juízo sobre Edom, um país vizinho de israel.'
            ),
            'jn' => array(
                'portuguese' => 'Jonas não queria pregar para a gente de Nínive, que era inimiga do país do profeta. Quando, finalmente, levou a mensagem enviada por Deus, seus habitantes se arrependeram.'
            ),
            'mq' => array(
                'portuguese' => 'A mensagem de Miquéias para Judá era de juízo, em vez de perdão, esperança e restauração. Especialmente notável é um versículo em que resume o que Deus requer de nós (6:8).'
            ),
            'na' => array(
                'portuguese' => 'Naum anunciou que Deus destruiria o povo de Nínive por sua crueldade na guerra.'
            ),
            'hc' => array(
                'portuguese' => 'Este livro aprensenta um diálogo entre Deus e Habacuque sobre a justiça e o sofrimento.'
            ),
            'sf' => array(
                'portuguese' => 'Este profeta anunciou o Dia do Senhor, que traria juízo a Judá e às nações vizinhas. Esse dia, que haveria de vir, seria de destruição para muitos, mas um pequeno remanescente, sempre fiel a Deus, sobreviveria para abençoar o mundo inteiro.'
            ),
            'ag' => array(
                'portuguese' => 'Depois que o povo voltou do exílio, Ageu admoestou as pessoas para que dessem prioridade a Deus e reconstruíssem em primeiro lugar o templo, mesmo antes de reconstruírem suas casas.'
            ),
            'zc' => array(
                'portuguese' => 'Como Ageu, Zacarias instou o povo a reconstruir o templo, assegurando-lhes a ajuda e bênçãos de Deus. Suas visões apontavam para um futuro brilhante.'
            ),
            'ml' => array(
                'portuguese' => 'Após o retorno do exílio, o povo voltou a descuidar de sua vida religiosa. Malaquias passou a inspirálos novamente, falando-lhes do "Dia do Senhor".'
            ),
            'mt' => array(
                'portuguese' => 'Este Evangelho cita muitos textos do Antigo Testamento. Ele se destinava primordialmente ao público judeu, para o qual apresentava Jesus como o Messias prometido nas Escrituras do Antigo Testamento. Mateus narra a história de Jesus desde seu nascimento até sua ressurreição e põe ênfase especial nos ensinamentos do Mestre.'
            ),
            'mc' => array(
                'portuguese' => 'Marcos escreveu um Evangelho curto, consciso e cheio de ação. Seu objetivo era aprofundar a fé e a dedicação da comunidade para a qual ele escrevia.'
            ),
            'lc' => array(
                'portuguese' => 'Neste Evangelho é enfatizado como a salvação em Jesus está ao alcance de todos. O evangelista mostra como Jesus estava em contato com as pessoas pobres, com os necessitados e com os que são desprezados pela sociedade.'
            ),
            'jo' => array(
                'portuguese' => 'O Evangelho de João, pela sua forma, se coloca à parte dos outros três. João organiza sua mensagem enfocando sete sinais que apontam para Jesus como Filho de Deus. Seu estilo literário é reflexivo e cheio de imagens e figuras.'
            ),
            'at' => array(
                'portuguese' => 'Quando Jesus deixou os seus discípulos, o Espírito Santo veio habitar com eles. Este livro foi escrito por Lucas para ser um complemento ao seu Evangelho. Ele relata eventos da história e da ação da igreja cristã primitiva, mostrando como a fé se propagou no mundo mediterrâneo de então.'
            ),
            'rm' => array(
                'portuguese' => 'Nesta importante carta, Paulo escreve aos romanos sobre a vida no Espírito, que é dada pela fé aos que crêem em Cristo. O apóstolo reafirma a grande bondade de Deus e declara que, através de Jesus Cristo, Deus nos aceita e nos liberta de nossos pecados.'
            ),
            '1co' => array(
                'portuguese' => 'Esta carta trata especificamente dos problemas que a igreja de Corinto estava enfrentando: dissensão, imoralidade, problemas quanto à forma da adoração pública e confusão sobre os dons do Espírito.'
            ),
            '2co' => array(
                'portuguese' => 'Nesta carta o apóstolo Pualo escreve sobre seu relacionamento com a igreja de Corinto e as dificuldades que alguns falsos profetas haviam trazido ao seu ministério.'
            ),
            'gl' => array(
                'portuguese' => 'Esta carta expõe a liberdade da pessoa que crê em Cristo com respeito à lei. Paulo declara que é somente pela fé que as pessoas são reconciliadas com Deus.'
            ),
            'ef' => array(
                'portuguese' => 'O tema central desta carta é o propósito eterno de Deus: Jesus Cristo é a cabeça da Igreja, que é formada a partir de muitas nações e raças.'
            ),
            'fp' => array(
                'portuguese' => 'A ênfase desta carta está no gozo que o crente em Cristo encontra em todas as circunstâncias da vida. O apóstolo Paulo a escreveu quando estava encarcerado.'
            ),
            'cl' => array(
                'portuguese' => 'Nesta carta o apóstolo Paulo diz aos cristãos de Colossos que abandonem suas superstições e que Cristo seja o centro de sua vida.'
            ),
            '1ts' => array(
                'portuguese' => 'O apóstolo Paulo da oá orientações aos cristão de Tessalônica a respeito da volta de Jesus ao mundo.'
            ),
            '2ts' => array(
                'portuguese' => 'Como em sua primeira carta, o apóstolo Paulo fala do retorno de Jesus ao mundo. Também trata de preparar os cristãos para a vindo do Senhor.'
            ),
            '1tm' => array(
                'portuguese' => 'Esta carta serve de orientação a Timóteo, um jovem líder da igreja primitiva. O apóstolo Paulo lhe dá conselhos sobre a adoração, o ministério e os relacionamentos dentro da igreja.'
            ),
            '2tm' => array(
                'portuguese' => 'Esta é a última carta escrita pelo apóstolo Paulo. Nela, lança um último desafio a seus companheiros de trabalho.'
            ),
            'tt' => array(
                'portuguese' => 'Tito era ministro em Creta. Nesta carta, o apóstolo Paulo o orienta sobre como ajudar os novos cristãos.'
            ),
            'fm' => array(
                'portuguese' => 'Filemon é instalado a perdoar seu escravo, Onésimo, que havia fugido. Filemon deveria aceitá-lo de volta como a um irmão em Cristo.'
            ),
            'hb' => array(
                'portuguese' => 'Esta carta exorta os novos cristãos a não observarem mais rituais e cerimônias tradicionais, pois, em Cristo, eles já foram cumpridos.'
            ),
            'tg' => array(
                'portuguese' => 'Tiago aconselha os cristãos a viverem na prática sua fé e, além disso, oferece idéias sobre como isso pode ser feito.'
            ),
            '1pe' => array(
                'portuguese' => 'Esta carta foi escrita para confortar os cristão da igreja primitiva que estavam sendo perseguidos por causa de sua fé.'
            ),
            '2pe' => array(
                'portuguese' => 'Nesta carta o apóstolo Pedro adverte os cristãos sobre os falsos mestres e os estimula a continuarem leias a Deus.'
            ),
            '1jo' => array(
                'portuguese' => 'Esta carta explica verdades básicas sobre a vida cristã com ênfase no mandamento de amarem uns aos outros.'
            ),
            '2jo' => array(
                'portuguese' => 'Esta carta, dirigida à "senhora eleita e aos seus filhos", adverte os cristãos quanto aos falsos profetas.'
            ),
            '3jo' => array(
                'portuguese' => 'Em contraste com sua Segunda Carta, esta fala da necessidade de receber os que pregam a Cristo.'
            ),
            'jd' => array(
                'portuguese' => 'Judas adverte seus leitores sobre a má influência de pessoas alheias à irmandade dos cristãos.'
            ),
            'ap' => array(
                'portuguese' => 'Este livro foi escrito para encorajar os cristãos que estavam sendo perseguidos e para firmá-los na confiança de que Deus cuidará deles. Usando símbolos e visões, o escrito ilustra o triunfo do bem sobre o mal e a criação de uma nova terra e um novo céu.'
            )
        );
        foreach ($books as $abbr => $data) {
            
            $data['abbreviation_url']   = $abbr;
            $data['summary']    = $summary[$abbr][$data['language']];
            DB::table('books')->insert(
                $data
            );
        }
    }
}
