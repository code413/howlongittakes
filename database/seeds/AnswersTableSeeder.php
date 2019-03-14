<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'question_id' => 1,
                'average_value' => "240",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "https://www.nasa.gov/offices/marsplanning/faqs/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 1,
                'average_value' => "162",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "https://www.space.com/24701-how-long-does-it-take-to-get-to-mars.html",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 1,
                'average_value' => "300",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "https://www.youtube.com/watch?v=MpOJ6fQ0roI",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 1,
                'average_value' => "260",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "https://www.seeker.com/videos/space/how-long-does-it-take-to-get-to-mars",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 2,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.mayoclinic.org/digestive-system/expert-answers/faq-20058340",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 2,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.healthline.com/health/how-long-does-it-take-to-digest-food",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 2,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.redorbit.com/how-long-digest-food/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 2,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.medicalnewstoday.com/articles/319583.php",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 3,
                'average_value' => "3",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "http://coolcosmos.ipac.caltech.edu/ask/174-How-long-does-it-take-to-travel-to-the-Moon-",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 3,
                'average_value' => "3",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "https://www.universetoday.com/13562/how-long-does-it-take-to-get-to-the-moon/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 3,
                'average_value' => "3",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 2,
                'url' => "https://www.space.com/18145-how-far-is-the-moon.html",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 4,
                'average_value' => null,
                'min_value' => "7",
                'max_value' => "10",
                'unit_id' => 5,
                'url' => "https://www.bbc.com/food/techniques/how_to_boil_eggs",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 4,
                'average_value' => null,
                'min_value' => "7",
                'max_value' => "10",
                'unit_id' => 5,
                'url' => "https://www.bbc.co.uk/programmes/p017tm3q",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 4,
                'average_value' => null,
                'min_value' => "12",
                'max_value' => "15",
                'unit_id' => 5,
                'url' => "https://www.leaf.tv/articles/how-long-does-it-take-to-boil-eggs/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 4,
                'average_value' => null,
                'min_value' => "7",
                'max_value' => "12",
                'unit_id' => 5,
                'url' => "https://metro.co.uk/2018/06/29/long-take-boil-egg-7671646/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 4,
                'average_value' => null,
                'min_value' => "9",
                'max_value' => "15",
                'unit_id' => 5,
                'url' => "https://www.goodhousekeeping.com/food-recipes/cooking/tips/a19189/cooking-perfect-hard-boiled-eggs/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 5,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.glidden.com/inspiration/all-articles/how-long-does-paint-take-to-dry-cure",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 5,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.bobvila.com/articles/how-long-does-it-take-paint-to-dry/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 5,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.hunker.com/13412963/how-long-should-latex-paint-dry-between-coats",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 5,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://homeguides.sfgate.com/long-interior-paint-need-dry-96537.html",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 5,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "8",
                'unit_id' => 4,
                'url' => "https://www.paintmaster.co.uk/how-long-does-floor-paint-take-to-dry-n-43.php",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 6,
                'average_value' => "1",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://www.glidden.com/inspiration/all-articles/how-long-does-paint-take-to-dry-cure",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 6,
                'average_value' => "1",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://www.bobvila.com/articles/how-long-does-it-take-paint-to-dry/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 6,
                'average_value' => "1",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://www.greatpros.com/blog/How-Long-Does-it-Take-for-Paint-to-Dry",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 6,
                'average_value' => "1",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://homeguides.sfgate.com/long-interior-paint-need-dry-96537.html",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 6,
                'average_value' => "1",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://www.hunker.com/13412963/how-long-should-latex-paint-dry-between-coats",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 6,
                'average_value' => "1",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://www.paintmaster.co.uk/how-long-does-floor-paint-take-to-dry-n-43.php",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 7,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 2,
                'url' => "https://www.healthline.com/health/how-do-antibiotics-work#length-of-time",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 7,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 2,
                'url' => "https://abcnews.go.com/Health/ColdandFluQuestions/story?id=6426578",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 7,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "4",
                'unit_id' => 2,
                'url' => "https://abcnews.go.com/Health/ColdandFluQuestions/story?id=6426578",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 2,
                'url' => "https://www.kissmyketo.com/blogs/faq_keto-science-ketosis/how-long-does-it-take-to-get-into-ketosis",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "10",
                'unit_id' => 2,
                'url' => "https://www.myketokitchen.com/keto-diet/how-long-does-it-take-to-get-into-ketosis/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "7",
                'max_value' => "30",
                'unit_id' => 2,
                'url' => "https://www.healthline.com/nutrition/10-signs-and-symptoms-of-ketosis#section7",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "4",
                'unit_id' => 2,
                'url' => "https://hvmn.com/blog/ketosis/how-long-does-it-take-to-get-into-ketosis-and-keto-adapt",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "7",
                'unit_id' => 2,
                'url' => "https://www.ruled.me/faq/how-long-does-it-take-to-get-into-ketosis/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "7",
                'unit_id' => 2,
                'url' => "https://ketohq.com/long-take-get-ketosis/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "7",
                'unit_id' => 2,
                'url' => "https://medium.com/advantage-keto-diet/how-long-does-it-take-to-get-into-ketosis-f5e9e9426aa6",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 8,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "7",
                'unit_id' => 2,
                'url' => "https://ketosummit.com/how-to-test-if-youre-in-ketosis/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "4.5",
                'max_value' => "5",
                'unit_id' => 4,
                'url' => "https://www.huffpost.com/entry/how-long-to-cook-a-turkey-per-pound_n_56566cc5e4b072e9d1c1c469",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "4.5",
                'max_value' => "5",
                'unit_id' => 4,
                'url' => "http://dish.allrecipes.com/turkey-cooking-time-guide/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "4.5",
                'max_value' => "5",
                'unit_id' => 4,
                'url' => "https://www.huffpost.com/entry/how-long-to-cook-a-turkey_n_5645fc2ae4b060377348a556",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "4.5",
                'max_value' => "5",
                'unit_id' => 4,
                'url' => "https://www.thanksgiving.com/all-holidays/thanksgiving/how-long-does-it-take-to-cook-a-turkey",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "4.5",
                'max_value' => "5",
                'unit_id' => 4,
                'url' => "https://www.foodsafety.gov/keep/charts/turkeyroastingchart.html",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "4.5",
                'max_value' => "5",
                'unit_id' => 4,
                'url' => "https://parade.com/236361/smccook/how-long-to-cook-the-perfect-turkey-and-how-to-know-when-a-turkey-is-done/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 9,
                'average_value' => null,
                'min_value' => "5.5",
                'max_value' => "6",
                'unit_id' => 4,
                'url' => "https://www.thespruceeats.com/turkey-cooking-times-1807695",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 10,
                'average_value' => null,
                'min_value' => "20",
                'max_value' => "25",
                'unit_id' => 5,
                'url' => "https://www.apple.com/shop/question/answers/product/MMEF2AM/A/how-long-does-it-take-to-charge-the-earpods/QYXPPDJXJPKD2DKFK",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 11,
                'average_value' => "45",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 5,
                'url' => "https://help.electrictobacconist.com/support/solutions/articles/9000135864-how-long-will-my-juul-take-to-charge-",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 12,
                'average_value' => null,
                'min_value' => "4",
                'max_value' => "6",
                'unit_id' => 12,
                'url' => "http://them360waves.com/how-long-does-it-take-to-get-360-waves/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 13,
                'average_value' => "450",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 11,
                'url' => "https://www.telegraph.co.uk/news/2018/01/10/stark-truth-long-plastic-footprint-will-last-planet/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 13,
                'average_value' => "450",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 11,
                'url' => "https://www.postconsumers.com/2011/10/31/how-long-does-it-take-a-plastic-bottle-to-biodegrade/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 13,
                'average_value' => "450",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 11,
                'url' => "https://www.longevitylive.com/live-better/how-long-does-it-take-for-your-plastic-trash-to-decompose/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 13,
                'average_value' => "400",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 11,
                'url' => "https://www.forbes.com/sites/trevornace/2017/07/26/million-plastic-bottles-minute-91-not-recycled/#62fff427292c",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 14,
                'average_value' => "6",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://healthcare.utah.edu/the-scope/shows.php?shows=0_kjy3yjer",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 14,
                'average_value' => "6",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://www.menshealth.com/health/a19546206/how-long-does-it-take-to-get-food-poisoning/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 14,
                'average_value' => "4",
                'min_value' => null,
                'max_value' => null,
                'unit_id' => 4,
                'url' => "https://health.williams.edu/medical-diagnoses/general-health-concerns/food-poisoning/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 15,
                'average_value' => null,
                'min_value' => "6",
                'max_value' => "10",
                'unit_id' => 2,
                'url' => "https://www.plannedparenthood.org/learn/teens/ask-experts/how-long-does-it-take-for-a-girl-to-get-pregnant-after-having-sex",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 15,
                'average_value' => null,
                'min_value' => "5",
                'max_value' => "10",
                'unit_id' => 2,
                'url' => "https://www.verywellfamily.com/does-lying-on-your-back-after-sex-help-with-conception-1960291",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 16,
                'average_value' => null,
                'min_value' => "20",
                'max_value' => "25",
                'unit_id' => 5,
                'url' => "https://www.lovepotatoes.co.uk/hints-and-tips/how-to-boil-potatoes/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 16,
                'average_value' => null,
                'min_value' => "20",
                'max_value' => "25",
                'unit_id' => 5,
                'url' => "https://www.quora.com/How-long-does-it-take-to-boil-a-potato",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 16,
                'average_value' => null,
                'min_value' => "10",
                'max_value' => "20",
                'unit_id' => 5,
                'url' => "https://www.thekitchn.com/how-to-boil-potatoes-cooking-lessons-from-the-kitchn-64716",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 17,
                'average_value' => null,
                'min_value' => "15",
                'max_value' => "20",
                'unit_id' => 5,
                'url' => "https://www.verywellfit.com/miles-and-kilometers-how-far-is-that-3435412",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 17,
                'average_value' => null,
                'min_value' => "12",
                'max_value' => "24",
                'unit_id' => 5,
                'url' => "https://www.sparkpeople.com/resource/fitness_articles.asp?id=1496",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

            [
                'question_id' => 18,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 12,
                'url' => "https://youngwomenshealth.org/2013/08/12/tattoos/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 18,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 12,
                'url' => "https://authoritytattoo.com/tattoo-healing-tips/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 18,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 12,
                'url' => "https://tatshub.com/how-long-tattoo-heal/",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],
            [
                'question_id' => 18,
                'average_value' => null,
                'min_value' => "2",
                'max_value' => "3",
                'unit_id' => 12,
                'url' => "https://www.tattoodo.com/guides/how-long-does-it-take-for-a-tattoo-to-heal",
                'approved' => 1,
                'discovered' => 1,
                'selected' => 1,
            ],

        ]);

    }
}
