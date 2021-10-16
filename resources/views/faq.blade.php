@extends('layout.app')

@section('content')
    <div class="site-overlay" id="site-overlay"></div>

    <div class="site-overlay site-overlay--cart" id="cart-overlay"></div>

    <section class="faq faq--section-one section--gray">
        <div class="int-content int-content--no-offset">
            <div class="container int-container int-container--gray">
                <div class="int-content_block int-content_block--wide">
                    <div id="shopify-section-faq-alter-eco" class="shopify-section">

                        <div class="section-callout section-callout--title">
                            <div class="section-callout_top">
                                <span class="section-callout_top_text">help</span>
                            </div>
                            <h1 class="section-callout_title">Frequently Asked Questions</h1>
                            <p class="section-callout_description">Click each question below for the answer. Don't see your question here? Ask us through our Contact page.</p>
                        </div>
                        <div class="section-callout section-callout--faq-title">
                            <div class="section-callout_top">
                                <span class="section-callout_top_text">about alter eco</span>
                            </div>
                        </div>
                        <div class="faq-block js-accordion-container">

                            <div class="faq-acc faq-acc--first">
                                <h6 class="faq-acc_title js-accordion-title">What is the story behind Alter Eco?</h6>
                                <article class="faq-acc_body js-accordion-list"><p><a href="our-story.html" title="Our Story">click here to find out</a></p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">What does it mean to be
                                    Fairtrade certified?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>To be Fairtrade&nbsp;certified means the producers have been paid a price that ensures sustainable production and living conditions, along with a premium to support the growth and advancement of the cooperatives and their communities. <a href="">Learn more!</a>&nbsp;</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">What kind of relationships do you have with the farmers?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Alter Eco&nbsp;has a close working&nbsp;relationship with our co-op farmers, which helps us to support the needs of their communities and grow our business. <a href="acopagro-co-op.html" title="Acopagro Cooperative">Meet our co-ops!</a></p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Where are your products made?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>We work with farmers in Peru, Ecuador, the Dominican Republic, Sri Lanka, India and Indonesia to produce our products. Our chocolate is manufactured in Switzerland and our Coconut Clusters are manufactured in Boulder, Colorado.&nbsp;</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Where can I find your products?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>You can find our products in independent retailers, pharmacies and health food stores across Australia and New Zealand. &nbsp;For a complete list of stockists click&nbsp;<a href="">here</a> or purchase online <a href="">here</a>. We also sell our products in&nbsp;the United States and Canada.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">How do you determine the price point of your products?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>We try our best to keep prices low for our customers. Because we are committed to our fairtrade practices to ensure farmers a living wage and a sustainable supply chain, prices can be higher than conventional chocolate.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">What makes Alter Eco an eco-friendly company?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Alter Eco operates on four pillars of sustainability: sourcing using Fair Trade</p>
                                    <p>principles, producing only organic and non-GMO foods, creating minimal</p>
                                    <p>waste by working towards 100 percent compostable packaging and in-setting</p>
                                    <p>carbon emissions by means of large-scale reforestation programs in the</p>
                                    <p>cooperatives that produce its crops. As part of its effort to become a carbon</p>
                                    <p>negative company, Alter Eco works in tandem with PUR Projet, a reforestation</p>
                                    <p>program started by Alter Eco France founder, Tristan Lecomte, to plant trees</p>
                                    <p>and offset the amount of CO2 produced.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Who distributes your products?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Find our complete list of distributors <a href="">here</a>.&nbsp;</p></article>
                            </div>

                        </div>

                    </div>
                    <div id="shopify-section-faq-quinoa" class="shopify-section">

                        <div class="section-callout section-callout--faq-title">
                            <div class="section-callout_top">
                                <span class="section-callout_top_text">Product Information</span>
                            </div>
                        </div>
                        <div class="faq-block js-accordion-container">

                            <div class="faq-acc faq-acc--first">
                                <h6 class="faq-acc_title js-accordion-title">Why aren't all of your products 100% certified fairtrade?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>All ingredients that can be certified Fairtrade, are. There is currently no International fairtrade standard regarding milk, and a few other ingredients that we source.&nbsp;In this case, we work closely with our chocolatiers to ensure the ingredients used in some of our products are sourced from sustainable suppliers.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Are your truffle wrappers really compostable?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Yes! Our truffle wrappers and are commercially compostable! They are mostly derived from eucalyptus and birch. Our packaging is not suitable for backyard composting at this time.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Is all of your packaging compostable or recyclable?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>While our ultimate goal is 100% either recyclable or compostable packaging, we&rsquo;re not quite there yet. Our cluster pouches are not currently recyclable or compostable. Alter Eco remains committed to sustainable packaging and is working hard to develop sustainable packaging alternatives. Learn more about our packaging journey <a href="">here</a>.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Did you change your brand look?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>We recently debuted a fresh, new look for Alter Eco. Rest assured, our ingredients, flavours, and packaging (aside from the appearance) has all remained unchanged.</p></article>
                            </div>

                        </div>

                    </div>
                    <div id="shopify-section-faq-nutritional-info" class="shopify-section">

                        <div class="section-callout section-callout--faq-title">
                            <div class="section-callout_top">
                                <span class="section-callout_top_text">nutritional information</span>
                            </div>
                        </div>
                        <div class="faq-block js-accordion-container">

                            <div class="faq-acc faq-acc--first">
                                <h6 class="faq-acc_title js-accordion-title">Where can I find your nutrition facts?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>&nbsp;You can find the nutritional panel link on the individual product pages. The ingredients are listed to the right of the image. Underneath the ingredient list is a grey box that says &ldquo;nutrition facts&rdquo;. Click on the box and it will bring up the panel.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Are your products vegan?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Some of our chocolate bars and truffles contain dairy: Dark Coconut Toffee, Dark Brown Butter, Dark Salt &amp; Malt and Dark Burnt Caramel chocolate bars as well as&nbsp;the Silk Velvet, Black, Sea Salt, Mint Cr&egrave;me and Salted Caramel Truffles.</p>
                                    <p></p>
                                    <p>Our chocolatier produces our chocolate on equipment shared with tree nuts, milk, and soy.&nbsp;Equipment is carefully cleaned between every production run.</p>
                                    <p></p>
                                    <p>Here is our complete list of vegan products: Dark Sea Salt, Dark Salted Almonds, Dark Blackout, Dark Super Blackout, Dark Mint, Dark Quinoa, Original Coconut Clusters, Cherry + Almond Butter Coconut Clusters, and Seeds + Salt Coconut Clusters.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Why is there dairy in your truffles? Why aren’t they vegan?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Currently, the milk powder in our truffles &nbsp;is a key ingredient for the creamy filling.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">What are the natural flavours found in some of your chocolates made of?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Our natural flavours are made with plant extracts, which contain no regulated allergens, GMOs, or artificial flavours. The natural flavour is extracted from spices, fruits, fruit juices, vegetables, vegetable juices, herb, bark, buds, roots or leaves.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">All of your bars say ‘dark’ chocolate, but some of them have milk or butter. What are the industry standards?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>The bars we sell containing milk are our Dark Coconut Toffee, Dark Brown Butter, Dark Salt &amp; Malt and Dark Burnt Caramel. All five of our Truffle flavors also contain milk.</p>
                                    <p></p>
                                    <p>An understandable misperception is that &ldquo;Dark&rdquo; means &ldquo;no milk&rdquo;. Dark chocolate will generally have a higher percentage of cocoa and can range from 30% to 80% in cocoa make-up. Because we follow the Swiss regulation when it comes to naming conventions, those bars are indeed Dark Chocolate, not &ldquo;milk chocolate&rdquo;, which is why we say Dark with a Touch of Milk.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Do any of your products contain soy?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>We do not use soy ingredients in our products, including soy protein and soy lecithin. However, our chocolatier produces our chocolate on equipment shared with soy, tree nuts, and milk.&nbsp;Equipment is carefully cleaned between every production run.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Are your products paleo?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Our Coconut Clusters, Dark Super Blackout Bar and Dark Blackout Bar are all paleo-friendly.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Are your products gluten free?  What about cross contamination?</h6>
                                <article class="faq-acc_body js-accordion-list"><p></p>
                                    <p>All of our chocolate bars (except Dark Salt &amp; Malt), truffles, and clusters&nbsp;are endorsed by Coeliac Australia, which means that they have been tested and contain less than 10 ppm of gluten.&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>Our 70% Dark Salt &amp; Malt bar does contain gluten. If you are interested in viewing our verification you may contact the Gluten Free Certification Organization directly and request a report.</p>
                                    <p></p>
                                    <p>To address cross contamination, we have a strict sanitation policy accompanied by product surface testing to ensure there are no residual allergens present. The lines are thoroughly cleaned between each production run and the allergens are separately handled in the facility to avoid cross contamination. In addition, the facility is audited against the British Retail Consortiums &ldquo;Global Food Standard&rdquo; and consistently certified as a Grade A (the highest level attainable). However, we cannot guarantee the total absence of allergens in the chocolate.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p></p>
                                    <p></p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Do any of your products contain nuts?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Currently, all of our products are made in a peanut free facility and there is no possible cross-contamination with peanuts. We do use some tree nuts in our products, such as almonds.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Do you produce your chocolate using the Dutch process?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Our chocolate bar process does not require alkali (the Dutch process). We use the traditional Swiss method.&nbsp;</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">What is the percentage of caffeine in your chocolate?</h6>
                                <article class="faq-acc_body js-accordion-list"><p></p>
                                    <p></p>
                                    <p>Chocolate, especially dark chocolate, contains a small quantity of caffeine and also theobromine, another stimulant. The darker the bar, the more caffeine and theobromine it contains.</p>
                                    <p>We estimate that our chocolate contains between 15 and 50mg of caffeine per serving of chocolate (40g). As a comparison, drip coffee contains between 140 and 190mg of caffeine per serving (1 cup).</p>
                                    <p>Cacao beans also contain theobromine, which is very close to caffeine in term of chemical structure. &nbsp;Theobromine is considered less stimulating than caffeine.</p>
                                    <p>We currently don&rsquo;t process our chocolate to remove caffeine or theobromine as this would affect the quality of our product.</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Does your chocolate contain heavy metals?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Cadmium and lead are elements that are present naturally in the environment, and when absorbed by crops, can be found in food products. Trace levels can be found in chocolate as well as other agricultural products like legumes, seed pods, grains, and some leafy vegetables. These elements (in addition to other beneficial minerals) are absorbed naturally from the soil by the roots of cocoa trees, and are thus a natural constituent of pods, beans, and eventually the finished product. Volcanic soils have higher levels of cadmium than other soils, and volcanic soil is more common in the regions where we source our cocoa beans from.</p>
                                    <p></p>
                                    <p>Alter Eco is attentive to and compliant with standards applicable to its products in various markets. Because of the types of products we sell, Alter Eco is regulated in the United States by the Food &amp; Drug Administration (FDA), which has not established limits or provided guidance on the topic of heavy metals in food at this time. Because of this, we have invested a lot of time and energy to research other points of reference used around the world by, for example, the European Union and the World Health Organization, and our products are meeting these standards.</p>
                                    <p></p>
                                    <p>We at Alter Eco stand strongly behind the quality and safety of our products, and we consume our own products frequently! We work very hard, along with our suppliers, manufacturers and distributors, to ensure that all food safety management systems, like ISO 22000 and Hazard Analysis &amp; Critical Control Points (HACCP), are implemented and carefully followed.</p>
                                    <p>For more information, <a href=""><u>click here</u></a>.</p>
                                    <p>&nbsp;</p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Are GMO’s really that big of a problem?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>Independently from what scientific research tells us on the effect of GMOs, we are in full support of transparency around GMO. <a href="">Click here to read more about our position and our Non-GMO Verification</a></p></article>
                            </div>

                            <div class="faq-acc">
                                <h6 class="faq-acc_title js-accordion-title">Why is there white sheen on my bar?</h6>
                                <article class="faq-acc_body js-accordion-list"><p>What you are seeing is called &ldquo;bloom&rdquo;. Because we do not use any emulsifiers, the bars are much more sensitive to temperature changes. When the chocolate is exposed to a change in temperature it can appear to have a white exterior. While it remains entirely edible, problems with the sheen are purely aesthetic. We recommend storing all bars at 15-18&deg;&nbsp;C and at 40-65% humidity. Our chocolates need to be stored in a dry, odorless environment protected from heat sources and sunlight.&nbsp;It is very important to avoid any dramatic temperature variation. Neither low to high or high to low.</p></article>
                            </div>

                        </div>

                    </div>


                    <a href="contact-us.html" class="noAnswer">Contact us here if you haven't found your answer.</a>


                </div>
            </div>
        </div>
    </section>
@endsection
