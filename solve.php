<?php

require_once 'vendor/autoload.php';

ini_set('memory_limit', '8096M');

class Country implements \Plastonick\Knapsack\Item
{
    private $name;

    private $area;

    private $population;

    public function __construct($name, $area, $population)
    {
        $this->name = $name;
        $this->area = $area;
        $this->population = $population;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getWeight()
    {
        return $this->population;
    }

    public function getValue()
    {
        return $this->area;
    }
}

$countriesMeta = [
    "Monaco" => [2.02, 38300],
    "Singapore" => [722.5, 5638700],
    "Vatican City" => [0.44, 1000],
    "Bahrain" => [778, 1566993],
    "Malta" => [315, 475701],
    "Maldives" => [298, 378114],
    "Bangladesh" => [143998, 166594104],
    "Barbados" => [430, 287010],
    "Mauritius" => [2040, 1265577],
    "Lebanon" => [10452, 6065922],
    "San Marino" => [61, 33407],
    "Nauru" => [21, 11000],
    "South Korea" => [100210, 51811167],
    "Rwanda" => [26338, 12374397],
    "Comoros" => [1861, 873724],
    "Netherlands" => [41526, 17319748],
    "Haiti" => [27065, 11242856],
    "India" => [3287240, 1347508000],
    "Israel" => [22072, 9032360],
    "Burundi" => [27816, 10953317],
    "Tuvalu" => [26, 10200],
    "Belgium" => [30528, 11463692],
    "Philippines" => [300000, 107672560],
    "Japan" => [377944, 126220000],
    "Sri Lanka" => [65610, 21670000],
    "El Salvador" => [21040, 6704864],
    "Grenada" => [344, 108825],
    "Marshall Islands" => [181, 55500],
    "Saint Lucia" => [617, 180454],
    "Vietnam" => [331212, 94660000],
    "Saint Vincent and the Grenadines" => [389, 110520],
    "United Kingdom" => [242910, 66040229],
    "Trinidad and Tobago" => [5155, 1359193],
    "Pakistan" => [803940, 204743217],
    "Jamaica" => [10991, 2726667],
    "Liechtenstein" => [160, 38380],
    "Kuwait" => [17818, 4226920],
    "Luxembourg" => [2586, 613894],
    "Antigua and Barbuda" => [442, 104084],
    "Qatar" => [11571, 2700390],
    "Germany" => [357168, 82979100],
    "Nigeria" => [923768, 200962000],
    "Dominican Republic" => [47875, 10358320],
    "Seychelles" => [455, 96762],
    "North Korea" => [120540, 25450000],
    "Saint Kitts and Nevis" => [270, 56345],
    "Gambia" => [10690, 2228075],
    "Switzerland" => [41285, 8542323],
    "São Tomé and Príncipe" => [1001, 201784],
    "Nepal" => [147181, 29609623],
    "Italy" => [301308, 60375749],
    "Uganda" => [241551, 40006700],
    "Andorra" => [464, 76177],
    "Guatemala" => [108889, 17679735],
    "Federated States of Micronesia" => [701, 105300],
    "Malawi" => [118484, 17563749],
    "Kiribati" => [811, 120100],
    "Cyprus" => [5896, 864200],
    "China" => [9640821, 1397441840],
    "Indonesia" => [1904569, 268074600],
    "Tonga" => [720, 100651],
    "Czech Republic" => [78867, 10649800],
    "Thailand" => [513120, 69183173],
    "Denmark" => [43098, 5806081],
    "Cape Verde" => [4033, 544081],
    "Togo" => [56600, 7352000],
    "Ghana" => [238533, 30280811],
    "France" => [543965, 66992000],
    "Poland" => [312685, 38413000],
    "Jordan" => [89342, 10420612],
    "Azerbaijan" => [86600, 9974578],
    "United Arab Emirates" => [83600, 9541615],
    "Portugal" => [92090, 10291027],
    "Slovakia" => [49036, 5443120],
    "Austria" => [83879, 8859992],
    "Turkey" => [783562, 82003882],
    "Hungary" => [93029, 9771000],
    "Moldova" => [33843, 3547539],
    "Cuba" => [109884, 11221060],
    "Slovenia" => [20273, 2066880],
    "Ethiopia" => [1063652, 107534882],
    "Benin" => [112622, 11362269],
    "Dominica" => [739, 74308],
    "Armenia" => [29743, 2969200],
//    "Albania" => [28703, 2870324],
//    "Syria" => [185180, 18284407],
//    "Sierra Leone" => [71740, 7075641],
//    "Malaysia" => [330803, 32734204],
//    "Egypt" => [1002450, 98696900],
//    "Costa Rica" => [51100, 5003393],
//    "Iraq" => [437072, 40877898],
//    "Spain" => [505990, 46733038],
//    "Kenya" => [581834, 52950879],
//    "Cambodia" => [181035, 16561944],
//    "Serbia" => [77474, 6901188],
//    "Romania" => [238391, 19524000],
//    "Greece" => [131957, 10741165],
//    "North Macedonia" => [25713, 2075301],
//    "Senegal" => [196722, 15726037],
//    "Honduras" => [112492, 9012229],
//    "Myanmar" => [676577, 53862731],
//    "Ivory Coast" => [322921, 25823071],
//    "Morocco" => [446550, 35026240],
//    "Timor-Leste" => [14919, 1167242],
//    "Lesotho" => [30355, 2263010],
//    "Burkina Faso" => [270764, 20244080],
//    "Uzbekistan" => [447400, 32653900],
//    "Brunei" => [5765, 421300],
//    "Croatia" => [56542, 4105493],
//    "Tunisia" => [163610, 11551448],
//    "Samoa" => [2831, 199052],
//    "Ukraine [note 6]" => [603000, 42101650],
//    "Bosnia and Herzegovina" => [51209, 3511372],
//    "of Ireland" => [70273, 4857000],
//    "Eswatini (Swaziland)" => [17364, 1159250],
//    "Yemen" => [455000, 28915284],
//    "Bulgaria" => [111002, 7000039],
//    "Mexico" => [1967138, 125327797],
//    "Tajikistan" => [143100, 8931000],
//    "Ecuador" => [276841, 17243108],
//    "Tanzania" => [945087, 55890747],
//    "Panama" => [74177, 4158783],
//    "Georgia" => [69700, 3729600],
//    "Nicaragua" => [121428, 6393824],
//    "Cameroon" => [466050, 24348251],
//    "Iran" => [1648195, 82468952],
//    "Guinea" => [245857, 12218357],
//    "Afghanistan" => [645807, 31575018],
//    "Fiji" => [18333, 884887],
//    "South Africa" => [1220813, 57725600],
//    "Djibouti" => [23000, 1078373],
//    "Belarus" => [207600, 9465300],
//    "Montenegro" => [13812, 622359],
//    "Liberia" => [97036, 4382387],
//    "Madagascar" => [587041, 26262810],
//    "Equatorial Guinea" => [28051, 1222442],
//    "Guinea-Bissau" => [36125, 1584763],
//    "Eritrea" => [121100, 5187948],
//    "Lithuania" => [65300, 2793986],
//    "Colombia" => [1141748, 45781400],
//    "Palau" => [444, 17900],
//    "Zimbabwe" => [390757, 14848905],
//    "Democratic Republic of the Congo" => [2345095, 84004989],
//    "Mozambique" => [799380, 28861863],
//    "Venezuela" => [916445, 31828110],
//    "United States" => [9833517, 329243628],
//    "Kyrgyzstan" => [199945, 6309300],
//    "Latvia" => [64562, 1918500],
//    "Estonia" => [45339, 1315635],
//    "Bahamas" => [13940, 386870],
//    "Laos" => [236800, 6492400],
//    "Peru" => [1285216, 32162184],
//    "Vanuatu" => [12281, 304500],
//    "Brazil" => [8515767, 209937159],
//    "Somalia" => [637657, 15181925],
//    "Solomon Islands" => [28370, 682500],
//    "Angola" => [1246700, 29250009],
//    "Chile" => [756096, 17373831],
//    "Sweden" => [450295, 10275405],
//    "Zambia" => [752612, 16405229],
//    "Sudan" => [1839542, 40782742],
//    "Bhutan" => [38394, 813312],
//    "South Sudan" => [644329, 12575714],
//    "Algeria" => [2381741, 42545964],
//    "Niger" => [1186408, 21466863],
//    "New Zealand" => [270467, 4965597],
//    "Papua New Guinea" => [462840, 8558800],
//    "Uruguay" => [176215, 2990452],
//    "Paraguay" => [406752, 7052983],
//    "Belize" => [22965, 398050],
//    "Norway" => [323782, 5328212],
//    "Finland" => [338424, 5521773],
//    "Argentina" => [2780400, 44494502],
//    "Saudi Arabia" => [2149690, 33413660],
//    "Republic of the Congo" => [342000, 5399895],
//    "Mali" => [1248574, 19107706],
//    "Oman" => [309500, 4183841],
//    "Turkmenistan" => [491210, 5851466],
//    "Chad" => [1284000, 15353184],
//    "Bolivia" => [1098581, 11307314],
//    "Russia" => [17125242, 146877088],
//    "Gabon" => [267667, 2067561],
//    "Central African Republic" => [622436, 4737423],
//    "Kazakhstan" => [2724900, 18356900],
//    "Botswana" => [581730, 2302878],
//    "Mauritania" => [1030700, 3984233],
//    "Canada" => [9984670, 37485305],
//    "Libya" => [1770060, 6470956],
//    "Guyana" => [214999, 782225],
//    "Suriname" => [163820, 568301],
//    "Iceland" => [102775, 357050],
//    "Australia" => [7692024, 25368216],
//    "Namibia" => [825118, 2413643],
//    "Mongolia" => [1564100, 3000000],
];

$totalPop = 0;
$countries = [];
foreach ($countriesMeta as $name => list($area, $population)) {
    // reverse normalise based on russia's area, i.e. we want to MINIMISE area rather than maximise
//    $area = 17125242 - $area;
//    $area *= -1;

    $countries[] = new Country($name, $area, $population);
    $totalPop += $population;
}

$limit = $totalPop / 2;
echo "limited to {$limit}\n";

$numCountries = count($countries);
echo "over {$numCountries} countries\n";

$solver = new \Plastonick\Knapsack\Solver($countries, $limit);

$solution = $solver->solve();

$numCountries = count($solution->getItems());
$usage = -1 * ($solution->getWeight() - ($numCountries * 17125242));
$usage = $solution->getWeight();
echo "used {$usage}\n";
echo "over {$numCountries} countries\n";

echo "Area is: {$solution->getValue()}\n";

echo "\n";

/** @var Country $country */
foreach ($solution->getItems() as $country) {
    echo "{$country->getName()} has been added\n";
}
