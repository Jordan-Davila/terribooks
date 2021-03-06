<?php

namespace Database\Seeders;

use App\Models\Territory;
use Illuminate\Database\Seeder;

class TerritorySeeder extends Seeder
{
    public function run()
    {
        Territory::create([
            "id" => 1,
            "city_id" => 1,
            "order" => 1,
            "code" => null,
            "coordinates" =>
                "[[[-74.20911,40.7815361],[-74.2104645,40.7818832],[-74.21053,40.7818565],[-74.21083,40.7818146],[-74.2113,40.78173],[-74.21188,40.7815361],[-74.21257,40.7813034],[-74.21272,40.7812347],[-74.2129059,40.7812],[-74.21307,40.7811775],[-74.21341,40.7811966],[-74.2143,40.7812843],[-74.215,40.7813759],[-74.21534,40.7814827],[-74.216,40.78174],[-74.2165146,40.78194],[-74.21696,40.78211],[-74.21736,40.78212],[-74.2187958,40.7820625],[-74.22077,40.7823219],[-74.22184,40.7824631],[-74.22294,40.7822342],[-74.223175,40.78223],[-74.22426,40.7825623],[-74.22395,40.780777],[-74.2237244,40.7803],[-74.2228241,40.77888],[-74.22213,40.7778168],[-74.22174,40.77654],[-74.2211,40.77473],[-74.22089,40.7743034],[-74.22088,40.77413],[-74.2206345,40.7739868],[-74.2176743,40.77268],[-74.21498,40.77535],[-74.2130051,40.7773781],[-74.21011,40.7798538],[-74.20911,40.7815361]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:51",
        ]);

        Territory::create([
            "id" => 2,
            "city_id" => 1,
            "order" => 2,
            "code" => null,
            "coordinates" =>
                "[[[-74.2051,40.7721176],[-74.2078552,40.7736931],[-74.21061,40.7753258],[-74.21161,40.7759132],[-74.2134,40.77694],[-74.21472,40.7755661],[-74.2154541,40.7748375],[-74.21765,40.772686],[-74.21348,40.7708473],[-74.20462,40.766552],[-74.20455,40.7670746],[-74.20451,40.7677765],[-74.20451,40.7685165],[-74.20458,40.7690277],[-74.20472,40.7702942],[-74.20484,40.771637],[-74.20489,40.7719269],[-74.2051,40.7721176]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:51",
        ]);

        Territory::create([
            "id" => 3,
            "city_id" => 1,
            "order" => 3,
            "code" => null,
            "coordinates" =>
                "[[[-74.2015,40.7818375],[-74.205,40.7811661],[-74.2065659,40.7810555],[-74.2072449,40.7811432],[-74.20911,40.78153],[-74.2099457,40.78014],[-74.21011,40.7798424],[-74.210434,40.77954],[-74.21162,40.77854],[-74.21342,40.77695],[-74.20767,40.7735977],[-74.2049,40.77205],[-74.20484,40.772644],[-74.2047,40.77322],[-74.2044144,40.7738533],[-74.2038651,40.77467],[-74.2029953,40.7755966],[-74.20189,40.77672],[-74.2017,40.77698],[-74.20146,40.7773743],[-74.2012,40.77802],[-74.2011,40.7789955],[-74.2012,40.77985],[-74.2012939,40.78039],[-74.2015,40.7818375]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:51",
        ]);

        Territory::create([
            "id" => 4,
            "city_id" => 1,
            "order" => 4,
            "code" => null,
            "coordinates" =>
                "[[[-74.19548,40.7897034],[-74.1961746,40.790844],[-74.19654,40.79163],[-74.19779,40.793396],[-74.19872,40.7925072],[-74.20113,40.79016],[-74.20172,40.7894325],[-74.20275,40.78819],[-74.20405,40.7867241],[-74.20566,40.7874374],[-74.20676,40.7860947],[-74.2067947,40.7856331],[-74.20838,40.784153],[-74.21056,40.782135],[-74.2104645,40.7818871],[-74.21003,40.7817764],[-74.2093353,40.7815971],[-74.20907,40.781517],[-74.20774,40.7812462],[-74.2065659,40.7810631],[-74.20501,40.7811775],[-74.20324,40.78151],[-74.20258,40.7816277],[-74.202034,40.7817421],[-74.2015152,40.7818336],[-74.20149,40.78255],[-74.20145,40.78308],[-74.2013245,40.78365],[-74.20115,40.7841148],[-74.20092,40.78469],[-74.2005157,40.78546],[-74.20004,40.7861137],[-74.19978,40.78644],[-74.19953,40.7867546],[-74.19882,40.78751],[-74.19753,40.78851],[-74.1961746,40.7893028],[-74.19548,40.7897034]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:52",
        ]);

        Territory::create([
            "id" => 5,
            "city_id" => 1,
            "order" => 5,
            "code" => null,
            "coordinates" =>
                "[[[-74.1948242,40.7668037],[-74.1949158,40.76694],[-74.19648,40.767746],[-74.19965,40.7692833],[-74.2031,40.77095],[-74.20451,40.77178],[-74.2043152,40.7697754],[-74.2041855,40.7684364],[-74.20415,40.76804],[-74.20416,40.767498],[-74.20416,40.7672653],[-74.20418,40.7670135],[-74.20425,40.7666435],[-74.2042847,40.76639],[-74.2041245,40.76631],[-74.20401,40.7662468],[-74.2033157,40.7658958],[-74.20213,40.76532],[-74.19958,40.7641258],[-74.19896,40.7637863],[-74.1981,40.7633667],[-74.19648,40.7625961],[-74.19585,40.7622871],[-74.1953354,40.7620163],[-74.1945953,40.76167],[-74.1938858,40.76133],[-74.19343,40.76115],[-74.19328,40.7611],[-74.1932144,40.7611237],[-74.19317,40.7611961],[-74.19313,40.76126],[-74.19305,40.76146],[-74.19276,40.7620125],[-74.19248,40.7625656],[-74.19233,40.7628326],[-74.192215,40.7630272],[-74.19207,40.7632942],[-74.19122,40.76304],[-74.19039,40.7646027],[-74.19096,40.7649078],[-74.1916962,40.7652855],[-74.19365,40.76627],[-74.1944351,40.76667],[-74.1947861,40.76663],[-74.1948242,40.7668037]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:52",
        ]);

        Territory::create([
            "id" => 6,
            "city_id" => 1,
            "order" => 6,
            "code" => null,
            "coordinates" => "[[[-74.18967,40.7678223],[-74.1932449,40.76888],[-74.19389,40.76766],[-74.1944351,40.766674],[-74.19286,40.765873],[-74.19114,40.7650032],[-74.19048,40.7662544],[-74.18967,40.7678223]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:52",
        ]);

        Territory::create([
            "id" => 7,
            "city_id" => 1,
            "order" => 7,
            "code" => null,
            "coordinates" =>
                "[[[-74.19221,40.7709],[-74.1940155,40.7714577],[-74.19522,40.77185],[-74.1954,40.7725677],[-74.19681,40.77153],[-74.19932,40.7697],[-74.19966,40.76946],[-74.19975,40.7693367],[-74.19492,40.7669449],[-74.19482,40.7668],[-74.1947861,40.7666321],[-74.1944351,40.76667],[-74.19417,40.76713],[-74.194,40.76746],[-74.19361,40.7682076],[-74.19325,40.7688866],[-74.19221,40.7709]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:52",
        ]);

        Territory::create([
            "id" => 8,
            "city_id" => 1,
            "order" => 8,
            "code" => null,
            "coordinates" =>
                "[[[-74.19825,40.7829],[-74.19895,40.7829132],[-74.19912,40.7827873],[-74.19969,40.7824821],[-74.20013,40.782238],[-74.20117,40.78189],[-74.20111,40.7812729],[-74.20104,40.78082],[-74.20089,40.7799225],[-74.20076,40.7790222],[-74.20077,40.7782249],[-74.20116,40.77729],[-74.20164,40.77657],[-74.20229,40.775856],[-74.2026,40.77558],[-74.20264,40.7754364],[-74.20296,40.77509],[-74.20346,40.77464],[-74.20381,40.77423],[-74.20413,40.7737122],[-74.20435,40.7732277],[-74.2044754,40.7727127],[-74.20454,40.7721977],[-74.20452,40.7717819],[-74.204155,40.77158],[-74.20311,40.7709541],[-74.19975,40.769352],[-74.19967,40.76945],[-74.19541,40.7725639],[-74.1959,40.7746277],[-74.19613,40.7755775],[-74.19626,40.7760162],[-74.1963,40.7760849],[-74.19655,40.7762642],[-74.19664,40.7763557],[-74.19672,40.77649],[-74.19676,40.7766838],[-74.19682,40.77699],[-74.196846,40.77716],[-74.19682,40.77727],[-74.19682,40.77741],[-74.19688,40.77763],[-74.1969147,40.77773],[-74.19681,40.7783],[-74.1966,40.77945],[-74.19646,40.7802849],[-74.1963654,40.780407],[-74.1961746,40.7807045],[-74.19491,40.78225],[-74.1944046,40.78286],[-74.19431,40.7830238],[-74.194725,40.78302],[-74.1969,40.7828979],[-74.19825,40.7829]]]",
            "created_at" => "2020-03-17 21:57:51",
            "updated_at" => "2020-03-17 21:57:52",
        ]);

        Territory::create([
            "id" => 9,
            "city_id" => 2,
            "order" => 9,
            "code" => null,
            "coordinates" =>
                "[[[-74.19179,40.78264],[-74.19361,40.78302],[-74.19431,40.7830162],[-74.1943741,40.78291],[-74.1948242,40.78235],[-74.19533,40.78175],[-74.19564,40.78136],[-74.1959457,40.780983],[-74.19619,40.7806778],[-74.19633,40.7804642],[-74.19643,40.7802849],[-74.1964951,40.7800941],[-74.1965561,40.7797165],[-74.1966248,40.7793159],[-74.1967,40.7788849],[-74.19678,40.7784348],[-74.19684,40.7781067],[-74.19691,40.7777328],[-74.19681,40.7774048],[-74.19681,40.77727],[-74.19684,40.7771721],[-74.19674,40.7765961],[-74.19672,40.7764931],[-74.1966248,40.77634],[-74.19653,40.7762527],[-74.19642,40.77617],[-74.1963043,40.7760849],[-74.19626,40.77602],[-74.19614,40.7756],[-74.1959,40.7746239],[-74.19576,40.774044],[-74.1956558,40.77361],[-74.1954,40.7725754],[-74.19368,40.7741051],[-74.1911545,40.7763939],[-74.19061,40.77704],[-74.19016,40.77773],[-74.18941,40.77919],[-74.19179,40.78264]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:53",
        ]);

        Territory::create([
            "id" => 10,
            "city_id" => 2,
            "order" => 10,
            "code" => null,
            "coordinates" =>
                "[[[-74.1937256,40.7862663],[-74.1942444,40.78726],[-74.19469,40.78811],[-74.19539,40.7894745],[-74.19582,40.78925],[-74.1969452,40.7885933],[-74.1973648,40.78832],[-74.19775,40.7880325],[-74.1982,40.7876549],[-74.19847,40.7874222],[-74.19883,40.78703],[-74.1990356,40.7868271],[-74.1991959,40.78666],[-74.19967,40.7860832],[-74.19993,40.7857246],[-74.20022,40.78523],[-74.20041,40.7849464],[-74.20052,40.7847328],[-74.20061,40.7845421],[-74.2007446,40.7841454],[-74.20092,40.78363],[-74.20105,40.7831573],[-74.20108,40.7826462],[-74.20113,40.7824059],[-74.20122,40.7823],[-74.20121,40.78188],[-74.20014,40.78224],[-74.19952,40.78258],[-74.1991,40.78281],[-74.19896,40.7829132],[-74.19842,40.78291],[-74.1975555,40.78289],[-74.19614,40.78293],[-74.19467,40.7830276],[-74.19362,40.78302],[-74.19159,40.78261],[-74.191925,40.7829933],[-74.1921158,40.7832756],[-74.19238,40.7836876],[-74.19269,40.78427],[-74.19328,40.78537],[-74.1937256,40.7862663]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:53",
        ]);

        Territory::create([
            "id" => 11,
            "city_id" => 2,
            "order" => 11,
            "code" => null,
            "coordinates" =>
                "[[[-74.18648,40.78894],[-74.18672,40.7890854],[-74.18696,40.78917],[-74.1875,40.7893143],[-74.18826,40.7895241],[-74.1888,40.7896538],[-74.1893158,40.7896957],[-74.18946,40.7896767],[-74.1902542,40.78958],[-74.1909561,40.7894974],[-74.19156,40.7894249],[-74.19243,40.78931],[-74.19315,40.78922],[-74.1938553,40.7891273],[-74.19398,40.7890739],[-74.1944046,40.78889],[-74.1944962,40.7888374],[-74.19461,40.7888],[-74.19493,40.78862],[-74.1936951,40.7862],[-74.1931839,40.7851944],[-74.19268,40.7842522],[-74.1923141,40.78359],[-74.19195,40.7830238],[-74.19176,40.7828026],[-74.1915741,40.782608],[-74.1901245,40.7823257],[-74.18839,40.7854271],[-74.18796,40.78618],[-74.18744,40.78713],[-74.1870041,40.7879448],[-74.18662,40.78865],[-74.18648,40.78894]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:53",
        ]);

        Territory::create([
            "id" => 12,
            "city_id" => 2,
            "order" => 12,
            "code" => null,
            "coordinates" =>
                "[[[-74.1798,40.79338],[-74.19225,40.7923355],[-74.1924,40.7923279],[-74.1928,40.79153],[-74.19308,40.7911568],[-74.19337,40.7908249],[-74.19376,40.7904968],[-74.1943054,40.7901344],[-74.1947861,40.78983],[-74.19537,40.7894936],[-74.1951752,40.7890968],[-74.19493,40.7886238],[-74.19461,40.7888],[-74.1944962,40.78884],[-74.1944,40.78889],[-74.1938553,40.78913],[-74.19316,40.7892227],[-74.1920242,40.7893639],[-74.1909943,40.7894974],[-74.18952,40.78967],[-74.18932,40.7897],[-74.18893,40.7896652],[-74.1888046,40.7896538],[-74.18842,40.7895622],[-74.18715,40.7892227],[-74.18694,40.7891655],[-74.18672,40.78909],[-74.18648,40.78894],[-74.18565,40.78853],[-74.18475,40.7880554],[-74.1839142,40.78761],[-74.18355,40.7873955],[-74.18313,40.78714],[-74.18117,40.78909],[-74.18072,40.7895355],[-74.18023,40.7900047],[-74.17864,40.7916],[-74.1782761,40.7920227],[-74.17847,40.7921257],[-74.17858,40.7921944],[-74.17877,40.7922821],[-74.17909,40.79239],[-74.17935,40.7924767],[-74.1795044,40.79254],[-74.17964,40.7926521],[-74.17969,40.7927322],[-74.17972,40.79284],[-74.17979,40.7931557],[-74.1798,40.79338]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:53",
        ]);

        Territory::create([
            "id" => 13,
            "city_id" => 2,
            "order" => 13,
            "code" => null,
            "coordinates" =>
                "[[[-74.18605,40.7986336],[-74.1879349,40.79902],[-74.189,40.79917],[-74.18991,40.7984161],[-74.19078,40.79753],[-74.19121,40.7967453],[-74.1914,40.796093],[-74.1916,40.7953],[-74.19184,40.794445],[-74.1920242,40.7937546],[-74.19216,40.7931633],[-74.19237,40.7923431],[-74.18841,40.7926636],[-74.18458,40.7929878],[-74.18552,40.7985764],[-74.18605,40.7986336]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:53",
        ]);

        Territory::create([
            "id" => 14,
            "city_id" => 2,
            "order" => 14,
            "code" => null,
            "coordinates" =>
                "[[[-74.18046,40.7967567],[-74.18375,40.7979279],[-74.18406,40.7981529],[-74.1847153,40.79844],[-74.18506,40.7985153],[-74.18552,40.79858],[-74.18509,40.7959976],[-74.18457,40.7929878],[-74.1797943,40.79338],[-74.1803055,40.79593],[-74.18046,40.7967567]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:54",
        ]);

        Territory::create([
            "id" => 15,
            "city_id" => 2,
            "order" => 15,
            "code" => null,
            "coordinates" =>
                "[[[-74.18314,40.78715],[-74.18388,40.78759],[-74.18444,40.7878761],[-74.1854,40.7883873],[-74.18646,40.7889175],[-74.18796,40.7861557],[-74.19011,40.78233],[-74.1897049,40.78224],[-74.18952,40.7822151],[-74.1891861,40.78218],[-74.18881,40.7821922],[-74.18822,40.782238],[-74.1876,40.7823],[-74.18701,40.7823448],[-74.18675,40.78237],[-74.18656,40.7824554],[-74.18566,40.783287],[-74.18554,40.7833939],[-74.18493,40.7839165],[-74.184845,40.7839851],[-74.1846161,40.78413],[-74.18455,40.78418],[-74.1844559,40.7842636],[-74.18426,40.78446],[-74.18441,40.7846451],[-74.18475,40.785],[-74.1850357,40.78531],[-74.18465,40.7856941],[-74.18407,40.7862549],[-74.18314,40.78715]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:54",
        ]);

        Territory::create([
            "id" => 16,
            "city_id" => 2,
            "order" => 16,
            "code" => null,
            "coordinates" =>
                "[[[-74.18425,40.78446],[-74.18455,40.7841721],[-74.184845,40.7839775],[-74.18525,40.783638],[-74.18563,40.7833138],[-74.1860352,40.78293],[-74.18649,40.7824936],[-74.18658,40.7824135],[-74.18668,40.7823677],[-74.18781,40.78226],[-74.18913,40.7821655],[-74.1896057,40.78221],[-74.1901245,40.7823219],[-74.19178,40.7826424],[-74.18872,40.77823],[-74.18789,40.7770462],[-74.1867142,40.7753868],[-74.1837845,40.77813],[-74.1807861,40.7808952],[-74.18138,40.7812576],[-74.18191,40.781868],[-74.18272,40.7828026],[-74.18425,40.78446]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:54",
        ]);

        Territory::create([
            "id" => 17,
            "city_id" => 2,
            "order" => 17,
            "code" => null,
            "coordinates" =>
                "[[[-74.18853,40.77793],[-74.1894,40.7791824],[-74.18976,40.7784767],[-74.1902,40.77766],[-74.1906357,40.7769928],[-74.19116,40.77639],[-74.19186,40.7757645],[-74.1925659,40.7751045],[-74.19323,40.7744865],[-74.1907349,40.7737122],[-74.1902847,40.7745476],[-74.18959,40.7758636],[-74.18903,40.77693],[-74.18853,40.77793]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:54",
        ]);

        Territory::create([
            "id" => 18,
            "city_id" => 2,
            "order" => 18,
            "code" => null,
            "coordinates" => "[[[-74.19075,40.7737122],[-74.19327,40.77447],[-74.19391,40.7738876],[-74.194725,40.7731476],[-74.1954,40.77256],[-74.19522,40.7718544],[-74.19349,40.7712975],[-74.1922,40.7709045],[-74.19075,40.7737122]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:54",
        ]);

        Territory::create([
            "id" => 19,
            "city_id" => 2,
            "order" => 19,
            "code" => null,
            "coordinates" => "[[[-74.1886139,40.76984],[-74.19029,40.7703362],[-74.1922,40.7708931],[-74.19324,40.7688828],[-74.18967,40.7678223],[-74.1886139,40.76984]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 20,
            "city_id" => 2,
            "order" => 20,
            "code" => null,
            "coordinates" => "[[[-74.18758,40.771862],[-74.18929,40.7723923],[-74.19113,40.77296],[-74.1922,40.7709],[-74.1886139,40.7698441],[-74.18758,40.771862]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 21,
            "city_id" => 2,
            "order" => 21,
            "code" => null,
            "coordinates" => "[[[-74.18617,40.7746048],[-74.18719,40.7760429],[-74.18853,40.777935],[-74.19112,40.7729645],[-74.18757,40.7718658],[-74.18617,40.7746048]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 22,
            "city_id" => 2,
            "order" => 22,
            "code" => null,
            "coordinates" => "[[[-74.18342,40.7759438],[-74.18505,40.77693],[-74.18671,40.77539],[-74.18499,40.7729378],[-74.18342,40.7759438]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 23,
            "city_id" => 2,
            "order" => 23,
            "code" => null,
            "coordinates" => "[[[-74.1823349,40.7761],[-74.183136,40.77634],[-74.1832352,40.77631],[-74.1842957,40.7742729],[-74.18499,40.7729378],[-74.18441,40.7720871],[-74.18415,40.7725677],[-74.18413,40.77266],[-74.1823349,40.7761]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 24,
            "city_id" => 2,
            "order" => 24,
            "code" => null,
            "coordinates" =>
                "[[[-74.179985,40.77796],[-74.18069,40.77838],[-74.1823654,40.779438],[-74.18505,40.77693],[-74.18342,40.7759476],[-74.1832352,40.77631],[-74.18313,40.7763443],[-74.18233,40.7760963],[-74.1814651,40.7758369],[-74.18095,40.7768059],[-74.18082,40.7771034],[-74.18061,40.77729],[-74.179985,40.77796]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 25,
            "city_id" => 2,
            "order" => 25,
            "code" => null,
            "coordinates" =>
                "[[[-74.17744,40.77906],[-74.17804,40.7792473],[-74.1783447,40.7793655],[-74.1785355,40.7794647],[-74.179,40.7797546],[-74.17978,40.78023],[-74.18079,40.7808762],[-74.18154,40.7802],[-74.1823654,40.77943],[-74.1816254,40.7789764],[-74.18067,40.7783852],[-74.17998,40.7779579],[-74.1795,40.7776451],[-74.17932,40.77753],[-74.17922,40.7774734],[-74.17894,40.7773666],[-74.1783752,40.7772064],[-74.17751,40.77696],[-74.17654,40.7787933],[-74.17744,40.77906]]]",
            "created_at" => "2020-03-17 21:57:53",
            "updated_at" => "2020-03-17 21:57:55",
        ]);

        Territory::create([
            "id" => 26,
            "city_id" => 3,
            "order" => 26,
            "code" => null,
            "coordinates" =>
                "[[[-74.17751,40.77696],[-74.17843,40.7772179],[-74.1789551,40.7773666],[-74.17923,40.7774734],[-74.1795044,40.77765],[-74.179985,40.7779579],[-74.18037,40.77756],[-74.1806,40.7773],[-74.18081,40.7770958],[-74.18095,40.7767944],[-74.1811752,40.77639],[-74.1814651,40.7758369],[-74.18056,40.7755623],[-74.17942,40.77522],[-74.17855,40.77496],[-74.17751,40.77696]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:56",
        ]);

        Territory::create([
            "id" => 27,
            "city_id" => 3,
            "order" => 27,
            "code" => null,
            "coordinates" =>
                "[[[-74.17528,40.7784767],[-74.17568,40.778595],[-74.17624,40.77872],[-74.17654,40.77879],[-74.17751,40.7769547],[-74.18034,40.7714424],[-74.17869,40.7709427],[-74.17775,40.7706451],[-74.1778641,40.77101],[-74.17809,40.7717056],[-74.17832,40.7727966],[-74.1784439,40.773243],[-74.17835,40.7738075],[-74.17825,40.7742157],[-74.17787,40.7748146],[-74.17725,40.7757378],[-74.1766357,40.7766],[-74.17614,40.77731],[-74.17528,40.7784767]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:56",
        ]);

        Territory::create([
            "id" => 28,
            "city_id" => 3,
            "order" => 28,
            "code" => null,
            "coordinates" => "[[[-74.17855,40.77496],[-74.18056,40.7755623],[-74.1816254,40.77352],[-74.17961,40.77291],[-74.17855,40.77496]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:56",
        ]);

        Territory::create([
            "id" => 29,
            "city_id" => 3,
            "order" => 29,
            "code" => null,
            "coordinates" => "[[[-74.18056,40.7755623],[-74.1823349,40.7760963],[-74.1833954,40.7740555],[-74.18163,40.7735252],[-74.18056,40.7755623]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:56",
        ]);

        Territory::create([
            "id" => 30,
            "city_id" => 3,
            "order" => 30,
            "code" => null,
            "coordinates" => "[[[-74.18163,40.77352],[-74.1833954,40.7740555],[-74.1844,40.7720833],[-74.18326,40.7704048],[-74.18163,40.77352]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:56",
        ]);

        Territory::create([
            "id" => 31,
            "city_id" => 3,
            "order" => 31,
            "code" => null,
            "coordinates" => "[[[-74.18443,40.77207],[-74.1861649,40.77459],[-74.18757,40.7718658],[-74.18499,40.7710876],[-74.18443,40.77207]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:57",
        ]);

        Territory::create([
            "id" => 32,
            "city_id" => 3,
            "order" => 32,
            "code" => null,
            "coordinates" => "[[[-74.18326,40.7704048],[-74.18442,40.77206],[-74.18496,40.7710762],[-74.18757,40.771862],[-74.18861,40.7698479],[-74.18602,40.76907],[-74.18425,40.7685165],[-74.18326,40.7704048]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:57",
        ]);

        Territory::create([
            "id" => 33,
            "city_id" => 3,
            "order" => 33,
            "code" => null,
            "coordinates" => "[[[-74.1796,40.7729],[-74.18163,40.77352],[-74.18325,40.7703972],[-74.1819,40.76847],[-74.1796,40.7729]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:57",
        ]);

        Territory::create([
            "id" => 34,
            "city_id" => 3,
            "order" => 34,
            "code" => null,
            "coordinates" => "[[[-74.17775,40.7706337],[-74.18036,40.7714272],[-74.1811447,40.7699432],[-74.17853,40.7691536],[-74.17755,40.768856],[-74.17733,40.76939],[-74.1775,40.7700729],[-74.17775,40.7706337]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:57",
        ]);

        Territory::create([
            "id" => 35,
            "city_id" => 3,
            "order" => 35,
            "code" => null,
            "coordinates" => "[[[-74.17755,40.768837],[-74.18115,40.769928],[-74.1819,40.76847],[-74.18184,40.76838],[-74.1799,40.7654877],[-74.1782761,40.76764],[-74.17755,40.768837]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:57",
        ]);

        Territory::create([
            "id" => 36,
            "city_id" => 3,
            "order" => 36,
            "code" => null,
            "coordinates" => "[[[-74.17991,40.765484],[-74.180954,40.76708],[-74.18193,40.768419],[-74.18209,40.768177],[-74.18249,40.7674],[-74.183266,40.76589],[-74.18031,40.764984],[-74.17991,40.765484]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-24 19:29:08",
        ]);

        Territory::create([
            "id" => 37,
            "city_id" => 3,
            "order" => 37,
            "code" => null,
            "coordinates" => "[[[-74.1819,40.76847],[-74.18325,40.7703972],[-74.1853,40.7664948],[-74.1832657,40.765892],[-74.18209,40.768177],[-74.1819,40.76847]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:58",
        ]);

        Territory::create([
            "id" => 38,
            "city_id" => 3,
            "order" => 38,
            "code" => null,
            "coordinates" => "[[[-74.18031,40.7649841],[-74.1832657,40.76589],[-74.18447,40.7636147],[-74.1829147,40.76315],[-74.18273,40.76311],[-74.1819839,40.76289],[-74.18108,40.7639732],[-74.18031,40.7649841]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:58",
        ]);

        Territory::create([
            "id" => 39,
            "city_id" => 3,
            "order" => 39,
            "code" => null,
            "coordinates" => "[[[-74.1832657,40.76589],[-74.1853,40.7664948],[-74.18648,40.764225],[-74.18447,40.76361],[-74.1832657,40.76589]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:58",
        ]);

        Territory::create([
            "id" => 40,
            "city_id" => 3,
            "order" => 40,
            "code" => null,
            "coordinates" => "[[[-74.18425,40.76852],[-74.18602,40.7690659],[-74.1870651,40.7670174],[-74.18825,40.7647629],[-74.1864853,40.76422],[-74.18425,40.76852]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:58",
        ]);

        Territory::create([
            "id" => 41,
            "city_id" => 3,
            "order" => 41,
            "code" => null,
            "coordinates" => "[[[-74.18602,40.7690659],[-74.18861,40.76984],[-74.18967,40.76782],[-74.1870651,40.76702],[-74.18602,40.7690659]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:58",
        ]);

        Territory::create([
            "id" => 42,
            "city_id" => 3,
            "order" => 42,
            "code" => null,
            "coordinates" => "[[[-74.1870651,40.7670174],[-74.18967,40.76782],[-74.19084,40.7655373],[-74.18825,40.76476],[-74.1870651,40.7670174]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:59",
        ]);

        Territory::create([
            "id" => 43,
            "city_id" => 3,
            "order" => 43,
            "code" => null,
            "coordinates" => "[[[-74.1864853,40.7642174],[-74.19085,40.7655334],[-74.19113,40.765007],[-74.1903839,40.7646065],[-74.19119,40.7630348],[-74.18782,40.7619972],[-74.1864853,40.7642174]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:59",
        ]);

        Territory::create([
            "id" => 44,
            "city_id" => 3,
            "order" => 44,
            "code" => null,
            "coordinates" => "[[[-74.1819839,40.76289],[-74.18273,40.76311],[-74.1829147,40.7631454],[-74.18648,40.7642136],[-74.18782,40.7619934],[-74.1837845,40.76081],[-74.18338,40.7613449],[-74.1819839,40.76289]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:59",
        ]);

        Territory::create([
            "id" => 45,
            "city_id" => 3,
            "order" => 45,
            "code" => null,
            "coordinates" => "[[[-74.18782,40.7619934],[-74.1920547,40.76327],[-74.19298,40.76156],[-74.19324,40.76105],[-74.18914,40.7597923],[-74.18782,40.7619934]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:59",
        ]);

        Territory::create([
            "id" => 46,
            "city_id" => 3,
            "order" => 46,
            "code" => null,
            "coordinates" => "[[[-74.18381,40.7608],[-74.18782,40.7619934],[-74.18912,40.7598038],[-74.18496,40.7585678],[-74.18468,40.759304],[-74.1843948,40.7598877],[-74.18406,40.7604637],[-74.18381,40.7608]]]",
            "created_at" => "2020-03-17 21:57:56",
            "updated_at" => "2020-03-17 21:57:59",
        ]);

        Territory::create([
            "id" => 47,
            "city_id" => 4,
            "order" => 39,
            "code" => "N39",
            "coordinates" => "[-74.187768,40.761896]",
            "created_at" => "2020-06-28 16:50:50",
            "updated_at" => "2020-06-28 20:36:54",
        ]);

        Territory::create([
            "id" => 54,
            "city_id" => 6,
            "order" => 5,
            "code" => "SC1",
            "coordinates" => null,
            "created_at" => "2020-07-07 09:31:40",
            "updated_at" => "2020-07-07 09:31:40",
        ]);

        Territory::create([
            "id" => 56,
            "city_id" => 4,
            "order" => 40,
            "code" => "N40",
            "coordinates" => null,
            "created_at" => "2020-08-16 01:32:05",
            "updated_at" => "2020-08-16 01:32:05",
        ]);

        Territory::create([
            "id" => 57,
            "city_id" => 4,
            "order" => 2,
            "code" => "N2",
            "coordinates" => null,
            "created_at" => "2020-09-20 01:46:19",
            "updated_at" => "2020-09-20 01:46:19",
        ]);

        Territory::create([
            "id" => 58,
            "city_id" => 7,
            "order" => 1,
            "code" => null,
            "coordinates" => null,
            "created_at" => "2020-09-20 17:56:40",
            "updated_at" => "2020-09-20 17:56:40",
        ]);

        Territory::create([
            "id" => 59,
            "city_id" => 7,
            "order" => 1,
            "code" => "SC1",
            "coordinates" => null,
            "created_at" => "2020-09-20 18:00:20",
            "updated_at" => "2020-09-20 18:00:20",
        ]);

        Territory::create([
            "id" => 60,
            "city_id" => 4,
            "order" => 1,
            "code" => "N1",
            "coordinates" => null,
            "created_at" => "2020-11-05 16:45:25",
            "updated_at" => "2020-11-05 16:45:25",
        ]);

        Territory::create([
            "id" => 61,
            "city_id" => 4,
            "order" => 3,
            "code" => "N3",
            "coordinates" => null,
            "created_at" => "2021-01-02 01:48:00",
            "updated_at" => "2021-01-02 01:48:00",
        ]);

        Territory::create([
            "id" => 62,
            "city_id" => 4,
            "order" => 4,
            "code" => "N4",
            "coordinates" => null,
            "created_at" => "2021-01-02 17:32:10",
            "updated_at" => "2021-01-02 17:32:10",
        ]);

        Territory::create([
            "id" => 63,
            "city_id" => 4,
            "order" => 5,
            "code" => "N5",
            "coordinates" => null,
            "created_at" => "2021-01-31 18:11:35",
            "updated_at" => "2021-01-31 18:11:35",
        ]);

        Territory::create([
            "id" => 64,
            "city_id" => 4,
            "order" => 6,
            "code" => "N6",
            "coordinates" => null,
            "created_at" => "2021-02-06 13:47:27",
            "updated_at" => "2021-02-06 13:47:27",
        ]);

        Territory::create([
            "id" => 67,
            "city_id" => 4,
            "order" => 7,
            "code" => "N7",
            "coordinates" => null,
            "created_at" => "2021-02-18 12:18:57",
            "updated_at" => "2021-02-18 12:18:57",
        ]);

        Territory::create([
            "id" => 68,
            "city_id" => 4,
            "order" => 8,
            "code" => "N8",
            "coordinates" => null,
            "created_at" => "2021-02-22 02:50:52",
            "updated_at" => "2021-02-22 02:50:52",
        ]);

        Territory::create([
            "id" => 71,
            "city_id" => 4,
            "order" => 9,
            "code" => "N9",
            "coordinates" => null,
            "created_at" => "2021-02-22 03:27:47",
            "updated_at" => "2021-02-22 03:27:47",
        ]);
    }
}
