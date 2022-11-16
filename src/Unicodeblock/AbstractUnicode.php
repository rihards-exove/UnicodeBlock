<?php namespace Benemohamed\Unicodeblock;

/*
 * Copyright 2019 Mohamed Benrebia <mohamed@ipfinder.io>
 *
 * Licensed under the Apache License, Version 2.0 (the License);
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an AS IS BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * @category  library
 * @author    Mohamed Benrebia <mohamed@ipfinder.io>
 * @copyright 2019 Mohamed Benrebia
 * @license   https://opensource.org/licenses/Apache-2.0 Apache License, Version 2.0
 */

 /**
 * abstract
 */
abstract class AbstractUnicode
{
    const Basic_Latin  =  self::Basic_Latin;
    const Latin_1_Supplement  =  self::Latin_1_Supplement;
    const Latin_Extended_A  =  self::Latin_Extended_A;
    const Latin_Extended_B  =  self::Latin_Extended_B;
    const IPA_Extensions  =  self::IPA_Extensions;
    const Spacing_Modifier_Letters  =  self::Spacing_Modifier_Letters;
    const Combining_Diacritical_Marks  =  self::Combining_Diacritical_Marks;
    const Greek_And_Coptic  =  self::Greek_And_Coptic;
    const Cyrillic  =  self::Cyrillic;
    const Cyrillic_Supplement  =  self::Cyrillic_Supplement;
    const Armenian  =  self::Armenian;
    const Hebrew  =  self::Hebrew;
    const Arabic  =  self::Arabic;
    const Syriac  =  self::Syriac;
    const Arabic_Supplement  =  self::Arabic_Supplement;
    const Thaana  =  self::Thaana;
    const NKo  =  self::NKo;
    const Samaritan  =  self::Samaritan;
    const Mandaic  =  self::Mandaic;
    const Syriac_Supplement  =  self::Syriac_Supplement;
    const Arabic_Extended_A  =  self::Arabic_Extended_A;
    const Devanagari  =  self::Devanagari;
    const Bengali  =  self::Bengali;
    const Gurmukhi  =  self::Gurmukhi;
    const Gujarati  =  self::Gujarati;
    const Oriya  =  self::Oriya;
    const Tamil  =  self::Tamil;
    const Telugu  =  self::Telugu;
    const Kannada  =  self::Kannada;
    const Malayalam  =  self::Malayalam;
    const Sinhala  =  self::Sinhala;
    const Thai  =  self::Thai;
    const Lao  =  self::Lao;
    const Tibetan  =  self::Tibetan;
    const Myanmar  =  self::Myanmar;
    const Georgian  =  self::Georgian;
    const Hangul_Jamo  =  self::Hangul_Jamo;
    const Ethiopic  =  self::Ethiopic;
    const Ethiopic_Supplement  =  self::Ethiopic_Supplement;
    const Cherokee  =  self::Cherokee;
    const Unified_Canadian_Aboriginal_Syllabics  =  self::Unified_Canadian_Aboriginal_Syllabics;
    const Ogham  =  self::Ogham;
    const Runic  =  self::Runic;
    const Tagalog  =  self::Tagalog;
    const Hanunoo  =  self::Hanunoo;
    const Buhid  =  self::Buhid;
    const Tagbanwa  =  self::Tagbanwa;
    const Khmer  =  self::Khmer;
    const Mongolian  =  self::Mongolian;
    const Unified_Canadian_Aboriginal_Syllabics_Extended  =  self::Unified_Canadian_Aboriginal_Syllabics_Extended;
    const Limbu  =  self::Limbu;
    const Tai_Le  =  self::Tai_Le;
    const New_Tai_Lue  =  self::New_Tai_Lue;
    const Khmer_Symbols  =  self::Khmer_Symbols;
    const Buginese  =  self::Buginese;
    const Tai_Tham  =  self::Tai_Tham;
    const Combining_Diacritical_Marks_Extended  =  self::Combining_Diacritical_Marks_Extended;
    const Balinese  =  self::Balinese;
    const Sundanese  =  self::Sundanese;
    const Batak  =  self::Batak;
    const Lepcha  =  self::Lepcha;
    const Ol_Chiki  =  self::Ol_Chiki;
    const Cyrillic_Extended_C  =  self::Cyrillic_Extended_C;
    const Sundanese_Supplement  =  self::Sundanese_Supplement;
    const Vedic_Extensions  =  self::Vedic_Extensions;
    const Phonetic_Extensions  =  self::Phonetic_Extensions;
    const Phonetic_Extensions_Supplement  =  self::Phonetic_Extensions_Supplement;
    const Combining_Diacritical_Marks_Supplement  =  self::Combining_Diacritical_Marks_Supplement;
    const Latin_Extended_Additional  =  self::Latin_Extended_Additional;
    const Greek_Extended  =  self::Greek_Extended;
    const General_Punctuation  =  self::General_Punctuation;
    const Superscripts_And_Subscripts  =  self::Superscripts_And_Subscripts;
    const Currency_Symbols  =  self::Currency_Symbols;
    const Combining_Diacritical_Marks_For_Symbols  =  self::Combining_Diacritical_Marks_For_Symbols;
    const Letterlike_Symbols  =  self::Letterlike_Symbols;
    const Number_Forms  =  self::Number_Forms;
    const Arrows  =  self::Arrows;
    const Mathematical_Operators  =  self::Mathematical_Operators;
    const Miscellaneous_Technical  =  self::Miscellaneous_Technical;
    const Control_Pictures  =  self::Control_Pictures;
    const Optical_Character_Recognition  =  self::Optical_Character_Recognition;
    const Enclosed_Alphanumerics  =  self::Enclosed_Alphanumerics;
    const Box_Drawing  =  self::Box_Drawing;
    const Block_Elements  =  self::Block_Elements;
    const Geometric_Shapes  =  self::Geometric_Shapes;
    const Miscellaneous_Symbols  =  self::Miscellaneous_Symbols;
    const Dingbats  =  self::Dingbats;
    const Miscellaneous_Mathematical_Symbols_A  =  self::Miscellaneous_Mathematical_Symbols_A;
    const Supplemental_Arrows_A  =  self::Supplemental_Arrows_A;
    const Braille_Patterns  =  self::Braille_Patterns;
    const Supplemental_Arrows_B  =  self::Supplemental_Arrows_B;
    const Miscellaneous_Mathematical_Symbols_B  =  self::Miscellaneous_Mathematical_Symbols_B;
    const Supplemental_Mathematical_Operators  =  self::Supplemental_Mathematical_Operators;
    const Miscellaneous_Symbols_And_Arrows  =  self::Miscellaneous_Symbols_And_Arrows;
    const Glagolitic  =  self::Glagolitic;
    const Latin_Extended_C  =  self::Latin_Extended_C;
    const Coptic  =  self::Coptic;
    const Georgian_Supplement  =  self::Georgian_Supplement;
    const Tifinagh  =  self::Tifinagh;
    const Ethiopic_Extended  =  self::Ethiopic_Extended;
    const Cyrillic_Extended_A  =  self::Cyrillic_Extended_A;
    const Supplemental_Punctuation  =  self::Supplemental_Punctuation;
    const CJK_Radicals_Supplement  =  self::CJK_Radicals_Supplement;
    const Kangxi_Radicals  =  self::Kangxi_Radicals;
    const Ideographic_Description_Characters  =  self::Ideographic_Description_Characters;
    const CJK_Symbols_And_Punctuation  =  self::CJK_Symbols_And_Punctuation;
    const Hiragana  =  self::Hiragana;
    const Katakana  =  self::Katakana;
    const Bopomofo  =  self::Bopomofo;
    const Hangul_Compatibility_Jamo  =  self::Hangul_Compatibility_Jamo;
    const Kanbun  =  self::Kanbun;
    const Bopomofo_Extended  =  self::Bopomofo_Extended;
    const CJK_Strokes  =  self::CJK_Strokes;
    const Katakana_Phonetic_Extensions  =  self::Katakana_Phonetic_Extensions;
    const Enclosed_CJK_Letters_And_Months  =  self::Enclosed_CJK_Letters_And_Months;
    const CJK_Compatibility  =  self::CJK_Compatibility;
    const CJK_Unified_Ideographs_Extension_A  =  self::CJK_Unified_Ideographs_Extension_A;
    const Yijing_Hexagram_Symbols  =  self::Yijing_Hexagram_Symbols;
    const CJK_Unified_Ideographs  =  self::CJK_Unified_Ideographs;
    const Yi_Syllables  =  self::Yi_Syllables;
    const Yi_Radicals  =  self::Yi_Radicals;
    const Lisu  =  self::Lisu;
    const Vai  =  self::Vai;
    const Cyrillic_Extended_B  =  self::Cyrillic_Extended_B;
    const Bamum  =  self::Bamum;
    const Modifier_Tone_Letters  =  self::Modifier_Tone_Letters;
    const Latin_Extended_D  =  self::Latin_Extended_D;
    const Syloti_Nagri  =  self::Syloti_Nagri;
    const Common_Indic_Number_Forms  =  self::Common_Indic_Number_Forms;
    const Phags_pa  =  self::Phags_pa;
    const Saurashtra  =  self::Saurashtra;
    const Devanagari_Extended  =  self::Devanagari_Extended;
    const Kayah_Li  =  self::Kayah_Li;
    const Rejang  =  self::Rejang;
    const Hangul_Jamo_Extended_A  =  self::Hangul_Jamo_Extended_A;
    const Javanese  =  self::Javanese;
    const Myanmar_Extended_B  =  self::Myanmar_Extended_B;
    const Cham  =  self::Cham;
    const Myanmar_Extended_A  =  self::Myanmar_Extended_A;
    const Tai_Viet  =  self::Tai_Viet;
    const Meetei_Mayek_Extensions  =  self::Meetei_Mayek_Extensions;
    const Ethiopic_Extended_A  =  self::Ethiopic_Extended_A;
    const Latin_Extended_E  =  self::Latin_Extended_E;
    const Cherokee_Supplement  =  self::Cherokee_Supplement;
    const Meetei_Mayek  =  self::Meetei_Mayek;
    const Hangul_Syllables  =  self::Hangul_Syllables;
    const Hangul_Jamo_Extended_B  =  self::Hangul_Jamo_Extended_B;
    const High_Surrogates  =  self::High_Surrogates;
    const High_Private_Use_Surrogates  =  self::High_Private_Use_Surrogates;
    const Low_Surrogates  =  self::Low_Surrogates;
    const Private_Use_Area  =  self::Private_Use_Area;
    const CJK_Compatibility_Ideographs  =  self::CJK_Compatibility_Ideographs;
    const Alphabetic_Presentation_Forms  =  self::Alphabetic_Presentation_Forms;
    const Arabic_Presentation_Forms_A  =  self::Arabic_Presentation_Forms_A;
    const Variation_Selectors  =  self::Variation_Selectors;
    const Vertical_Forms  =  self::Vertical_Forms;
    const Combining_Half_Marks  =  self::Combining_Half_Marks;
    const CJK_Compatibility_Forms  =  self::CJK_Compatibility_Forms;
    const Small_Form_Variants  =  self::Small_Form_Variants;
    const Arabic_Presentation_Forms_B  =  self::Arabic_Presentation_Forms_B;
    const Halfwidth_And_Fullwidth_Forms  =  self::Halfwidth_And_Fullwidth_Forms;
    const Specials  =  self::Specials;
    const Linear_B_Syllabary  =  self::Linear_B_Syllabary;
    const Linear_B_Ideograms  =  self::Linear_B_Ideograms;
    const Aegean_Numbers  =  self::Aegean_Numbers;
    const Ancient_Greek_Numbers  =  self::Ancient_Greek_Numbers;
    const Ancient_Symbols  =  self::Ancient_Symbols;
    const Phaistos_Disc  =  self::Phaistos_Disc;
    const Lycian  =  self::Lycian;
    const Carian  =  self::Carian;
    const Coptic_Epact_Numbers  =  self::Coptic_Epact_Numbers;
    const Old_Italic  =  self::Old_Italic;
    const Gothic  =  self::Gothic;
    const Old_Permic  =  self::Old_Permic;
    const Ugaritic  =  self::Ugaritic;
    const Old_Persian  =  self::Old_Persian;
    const Deseret  =  self::Deseret;
    const Shavian  =  self::Shavian;
    const Osmanya  =  self::Osmanya;
    const Osage  =  self::Osage;
    const Elbasan  =  self::Elbasan;
    const Caucasian_Albanian  =  self::Caucasian_Albanian;
    const Linear_A  =  self::Linear_A;
    const Cypriot_Syllabary  =  self::Cypriot_Syllabary;
    const Imperial_Aramaic  =  self::Imperial_Aramaic;
    const Palmyrene  =  self::Palmyrene;
    const Nabataean  =  self::Nabataean;
    const Hatran  =  self::Hatran;
    const Phoenician  =  self::Phoenician;
    const Lydian  =  self::Lydian;
    const Meroitic_Hieroglyphs  =  self::Meroitic_Hieroglyphs;
    const Meroitic_Cursive  =  self::Meroitic_Cursive;
    const Kharoshthi  =  self::Kharoshthi;
    const Old_South_Arabian  =  self::Old_South_Arabian;
    const Old_North_Arabian  =  self::Old_North_Arabian;
    const Manichaean  =  self::Manichaean;
    const Avestan  =  self::Avestan;
    const Inscriptional_Parthian  =  self::Inscriptional_Parthian;
    const Inscriptional_Pahlavi  =  self::Inscriptional_Pahlavi;
    const Psalter_Pahlavi  =  self::Psalter_Pahlavi;
    const Old_Turkic  =  self::Old_Turkic;
    const Old_Hungarian  =  self::Old_Hungarian;
    const Rumi_Numeral_Symbols  =  self::Rumi_Numeral_Symbols;
    const Brahmi  =  self::Brahmi;
    const Kaithi  =  self::Kaithi;
    const Sora_Sompeng  =  self::Sora_Sompeng;
    const Chakma  =  self::Chakma;
    const Mahajani  =  self::Mahajani;
    const Sharada  =  self::Sharada;
    const Sinhala_Archaic_Numbers  =  self::Sinhala_Archaic_Numbers;
    const Khojki  =  self::Khojki;
    const Multani  =  self::Multani;
    const Khudawadi  =  self::Khudawadi;
    const Grantha  =  self::Grantha;
    const Newa  =  self::Newa;
    const Tirhuta  =  self::Tirhuta;
    const Siddham  =  self::Siddham;
    const Modi  =  self::Modi;
    const Mongolian_Supplement  =  self::Mongolian_Supplement;
    const Takri  =  self::Takri;
    const Ahom  =  self::Ahom;
    const Warang_Citi  =  self::Warang_Citi;
    const Zanabazar_Square  =  self::Zanabazar_Square;
    const Soyombo  =  self::Soyombo;
    const Pau_Cin_Hau  =  self::Pau_Cin_Hau;
    const Bhaiksuki  =  self::Bhaiksuki;
    const Marchen  =  self::Marchen;
    const Masaram_Gondi  =  self::Masaram_Gondi;
    const Cuneiform  =  self::Cuneiform;
    const Cuneiform_Numbers_And_Punctuation  =  self::Cuneiform_Numbers_And_Punctuation;
    const Early_Dynastic_Cuneiform  =  self::Early_Dynastic_Cuneiform;
    const Egyptian_Hieroglyphs  =  self::Egyptian_Hieroglyphs;
    const Anatolian_Hieroglyphs  =  self::Anatolian_Hieroglyphs;
    const Bamum_Supplement  =  self::Bamum_Supplement;
    const Mro  =  self::Mro;
    const Bassa_Vah  =  self::Bassa_Vah;
    const Pahawh_Hmong  =  self::Pahawh_Hmong;
    const Miao  =  self::Miao;
    const Ideographic_Symbols_And_Punctuation  =  self::Ideographic_Symbols_And_Punctuation;
    const Tangut  =  self::Tangut;
    const Tangut_Components  =  self::Tangut_Components;
    const Kana_Supplement  =  self::Kana_Supplement;
    const Kana_Extended_A  =  self::Kana_Extended_A;
    const Nushu  =  self::Nushu;
    const Duployan  =  self::Duployan;
    const Shorthand_Format_Controls  =  self::Shorthand_Format_Controls;
    const Byzantine_Musical_Symbols  =  self::Byzantine_Musical_Symbols;
    const Musical_Symbols  =  self::Musical_Symbols;
    const Ancient_Greek_Musical_Notation  =  self::Ancient_Greek_Musical_Notation;
    const Tai_Xuan_Jing_Symbols  =  self::Tai_Xuan_Jing_Symbols;
    const Counting_Rod_Numerals  =  self::Counting_Rod_Numerals;
    const Mathematical_Alphanumeric_Symbols  =  self::Mathematical_Alphanumeric_Symbols;
    const Sutton_SignWriting  =  self::Sutton_SignWriting;
    const Glagolitic_Supplement  =  self::Glagolitic_Supplement;
    const Mende_Kikakui  =  self::Mende_Kikakui;
    const Adlam  =  self::Adlam;
    const Arabic_Mathematical_Alphabetic_Symbols  =  self::Arabic_Mathematical_Alphabetic_Symbols;
    const Mahjong_Tiles  =  self::Mahjong_Tiles;
    const Domino_Tiles  =  self::Domino_Tiles;
    const Playing_Cards  =  self::Playing_Cards;
    const Enclosed_Alphanumeric_Supplement  =  self::Enclosed_Alphanumeric_Supplement;
    const Enclosed_Ideographic_Supplement  =  self::Enclosed_Ideographic_Supplement;
    const Miscellaneous_Symbols_And_Pictographs  =  self::Miscellaneous_Symbols_And_Pictographs;
    const Emoticons  =  self::Emoticons;
    const Ornamental_Dingbats  =  self::Ornamental_Dingbats;
    const Transport_And_Map_Symbols  =  self::Transport_And_Map_Symbols;
    const Alchemical_Symbols  =  self::Alchemical_Symbols;
    const Geometric_Shapes_Extended  =  self::Geometric_Shapes_Extended;
    const Supplemental_Arrows_C  =  self::Supplemental_Arrows_C;
    const Supplemental_Symbols_And_Pictographs  =  self::Supplemental_Symbols_And_Pictographs;
    const CJK_Unified_Ideographs_Extension_B  =  self::CJK_Unified_Ideographs_Extension_B;
    const CJK_Unified_Ideographs_Extension_C  =  self::CJK_Unified_Ideographs_Extension_C;
    const CJK_Unified_Ideographs_Extension_D  =  self::CJK_Unified_Ideographs_Extension_D;
    const CJK_Unified_Ideographs_Extension_E  =  self::CJK_Unified_Ideographs_Extension_E;
    const CJK_Unified_Ideographs_Extension_F  =  self::CJK_Unified_Ideographs_Extension_F;
    const CJK_Compatibility_Ideographs_Supplement  =  self::CJK_Compatibility_Ideographs_Supplement;
    const Tags  =  self::Tags;
    const Variation_Selectors_Supplement  =  self::Variation_Selectors_Supplement;
    const Supplementary_Private_Use_Area_A  =  self::Supplementary_Private_Use_Area_A;
    const Supplementary_Private_Use_Area_B  =  self::Supplementary_Private_Use_Area_B;

    abstract public static function Basic_Latin(string $string);
    abstract public static function Latin_1_Supplement(string $string);
    abstract public static function Latin_Extended_A(string $string);
    abstract public static function Latin_Extended_B(string $string);
    abstract public static function IPA_Extensions(string $string);
    abstract public static function Spacing_Modifier_Letters(string $string);
    abstract public static function Combining_Diacritical_Marks(string $string);
    abstract public static function Greek_And_Coptic(string $string);
    abstract public static function Cyrillic(string $string);
    abstract public static function Cyrillic_Supplement(string $string);
    abstract public static function Armenian(string $string);
    abstract public static function Hebrew(string $string);
    abstract public static function Arabic(string $string);
    abstract public static function Syriac(string $string);
    abstract public static function Arabic_Supplement(string $string);
    abstract public static function Thaana(string $string);
    abstract public static function NKo(string $string);
    abstract public static function Samaritan(string $string);
    abstract public static function Mandaic(string $string);
    abstract public static function Syriac_Supplement(string $string);
    abstract public static function Arabic_Extended_A(string $string);
    abstract public static function Devanagari(string $string);
    abstract public static function Bengali(string $string);
    abstract public static function Gurmukhi(string $string);
    abstract public static function Gujarati(string $string);
    abstract public static function Oriya(string $string);
    abstract public static function Tamil(string $string);
    abstract public static function Telugu(string $string);
    abstract public static function Kannada(string $string);
    abstract public static function Malayalam(string $string);
    abstract public static function Sinhala(string $string);
    abstract public static function Thai(string $string);
    abstract public static function Lao(string $string);
    abstract public static function Tibetan(string $string);
    abstract public static function Myanmar(string $string);
    abstract public static function Georgian(string $string);
    abstract public static function Hangul_Jamo(string $string);
    abstract public static function Ethiopic(string $string);
    abstract public static function Ethiopic_Supplement(string $string);
    abstract public static function Cherokee(string $string);
    abstract public static function Unified_Canadian_Aboriginal_Syllabics(string $string);
    abstract public static function Ogham(string $string);
    abstract public static function Runic(string $string);
    abstract public static function Tagalog(string $string);
    abstract public static function Hanunoo(string $string);
    abstract public static function Buhid(string $string);
    abstract public static function Tagbanwa(string $string);
    abstract public static function Khmer(string $string);
    abstract public static function Mongolian(string $string);
    abstract public static function Unified_Canadian_Aboriginal_Syllabics_Extended(string $string);
    abstract public static function Limbu(string $string);
    abstract public static function Tai_Le(string $string);
    abstract public static function New_Tai_Lue(string $string);
    abstract public static function Khmer_Symbols(string $string);
    abstract public static function Buginese(string $string);
    abstract public static function Tai_Tham(string $string);
    abstract public static function Combining_Diacritical_Marks_Extended(string $string);
    abstract public static function Balinese(string $string);
    abstract public static function Sundanese(string $string);
    abstract public static function Batak(string $string);
    abstract public static function Lepcha(string $string);
    abstract public static function Ol_Chiki(string $string);
    abstract public static function Cyrillic_Extended_C(string $string);
    abstract public static function Sundanese_Supplement(string $string);
    abstract public static function Vedic_Extensions(string $string);
    abstract public static function Phonetic_Extensions(string $string);
    abstract public static function Phonetic_Extensions_Supplement(string $string);
    abstract public static function Combining_Diacritical_Marks_Supplement(string $string);
    abstract public static function Latin_Extended_Additional(string $string);
    abstract public static function Greek_Extended(string $string);
    abstract public static function General_Punctuation(string $string);
    abstract public static function Superscripts_And_Subscripts(string $string);
    abstract public static function Currency_Symbols(string $string);
    abstract public static function Combining_Diacritical_Marks_For_Symbols(string $string);
    abstract public static function Letterlike_Symbols(string $string);
    abstract public static function Number_Forms(string $string);
    abstract public static function Arrows(string $string);
    abstract public static function Mathematical_Operators(string $string);
    abstract public static function Miscellaneous_Technical(string $string);
    abstract public static function Control_Pictures(string $string);
    abstract public static function Optical_Character_Recognition(string $string);
    abstract public static function Enclosed_Alphanumerics(string $string);
    abstract public static function Box_Drawing(string $string);
    abstract public static function Block_Elements(string $string);
    abstract public static function Geometric_Shapes(string $string);
    abstract public static function Miscellaneous_Symbols(string $string);
    abstract public static function Dingbats(string $string);
    abstract public static function Miscellaneous_Mathematical_Symbols_A(string $string);
    abstract public static function Supplemental_Arrows_A(string $string);
    abstract public static function Braille_Patterns(string $string);
    abstract public static function Supplemental_Arrows_B(string $string);
    abstract public static function Miscellaneous_Mathematical_Symbols_B(string $string);
    abstract public static function Supplemental_Mathematical_Operators(string $string);
    abstract public static function Miscellaneous_Symbols_And_Arrows(string $string);
    abstract public static function Glagolitic(string $string);
    abstract public static function Latin_Extended_C(string $string);
    abstract public static function Coptic(string $string);
    abstract public static function Georgian_Supplement(string $string);
    abstract public static function Tifinagh(string $string);
    abstract public static function Ethiopic_Extended(string $string);
    abstract public static function Cyrillic_Extended_A(string $string);
    abstract public static function Supplemental_Punctuation(string $string);
    abstract public static function CJK_Radicals_Supplement(string $string);
    abstract public static function Kangxi_Radicals(string $string);
    abstract public static function Ideographic_Description_Characters(string $string);
    abstract public static function CJK_Symbols_And_Punctuation(string $string);
    abstract public static function Hiragana(string $string);
    abstract public static function Katakana(string $string);
    abstract public static function Bopomofo(string $string);
    abstract public static function Hangul_Compatibility_Jamo(string $string);
    abstract public static function Kanbun(string $string);
    abstract public static function Bopomofo_Extended(string $string);
    abstract public static function CJK_Strokes(string $string);
    abstract public static function Katakana_Phonetic_Extensions(string $string);
    abstract public static function Enclosed_CJK_Letters_And_Months(string $string);
    abstract public static function CJK_Compatibility(string $string);
    abstract public static function CJK_Unified_Ideographs_Extension_A(string $string);
    abstract public static function Yijing_Hexagram_Symbols(string $string);
    abstract public static function CJK_Unified_Ideographs(string $string);
    abstract public static function Yi_Syllables(string $string);
    abstract public static function Yi_Radicals(string $string);
    abstract public static function Lisu(string $string);
    abstract public static function Vai(string $string);
    abstract public static function Cyrillic_Extended_B(string $string);
    abstract public static function Bamum(string $string);
    abstract public static function Modifier_Tone_Letters(string $string);
    abstract public static function Latin_Extended_D(string $string);
    abstract public static function Syloti_Nagri(string $string);
    abstract public static function Common_Indic_Number_Forms(string $string);
    abstract public static function Phags_pa(string $string);
    abstract public static function Saurashtra(string $string);
    abstract public static function Devanagari_Extended(string $string);
    abstract public static function Kayah_Li(string $string);
    abstract public static function Rejang(string $string);
    abstract public static function Hangul_Jamo_Extended_A(string $string);
    abstract public static function Javanese(string $string);
    abstract public static function Myanmar_Extended_B(string $string);
    abstract public static function Cham(string $string);
    abstract public static function Myanmar_Extended_A(string $string);
    abstract public static function Tai_Viet(string $string);
    abstract public static function Meetei_Mayek_Extensions(string $string);
    abstract public static function Ethiopic_Extended_A(string $string);
    abstract public static function Latin_Extended_E(string $string);
    abstract public static function Cherokee_Supplement(string $string);
    abstract public static function Meetei_Mayek(string $string);
    abstract public static function Hangul_Syllables(string $string);
    abstract public static function Hangul_Jamo_Extended_B(string $string);
    abstract public static function High_Surrogates(string $string);
    abstract public static function High_Private_Use_Surrogates(string $string);
    abstract public static function Low_Surrogates(string $string);
    abstract public static function Private_Use_Area(string $string);
    abstract public static function CJK_Compatibility_Ideographs(string $string);
    abstract public static function Alphabetic_Presentation_Forms(string $string);
    abstract public static function Arabic_Presentation_Forms_A(string $string);
    abstract public static function Variation_Selectors(string $string);
    abstract public static function Vertical_Forms(string $string);
    abstract public static function Combining_Half_Marks(string $string);
    abstract public static function CJK_Compatibility_Forms(string $string);
    abstract public static function Small_Form_Variants(string $string);
    abstract public static function Arabic_Presentation_Forms_B(string $string);
    abstract public static function Halfwidth_And_Fullwidth_Forms(string $string);
    abstract public static function Specials(string $string);
    abstract public static function Linear_B_Syllabary(string $string);
    abstract public static function Linear_B_Ideograms(string $string);
    abstract public static function Aegean_Numbers(string $string);
    abstract public static function Ancient_Greek_Numbers(string $string);
    abstract public static function Ancient_Symbols(string $string);
    abstract public static function Phaistos_Disc(string $string);
    abstract public static function Lycian(string $string);
    abstract public static function Carian(string $string);
    abstract public static function Coptic_Epact_Numbers(string $string);
    abstract public static function Old_Italic(string $string);
    abstract public static function Gothic(string $string);
    abstract public static function Old_Permic(string $string);
    abstract public static function Ugaritic(string $string);
    abstract public static function Old_Persian(string $string);
    abstract public static function Deseret(string $string);
    abstract public static function Shavian(string $string);
    abstract public static function Osmanya(string $string);
    abstract public static function Osage(string $string);
    abstract public static function Elbasan(string $string);
    abstract public static function Caucasian_Albanian(string $string);
    abstract public static function Linear_A(string $string);
    abstract public static function Cypriot_Syllabary(string $string);
    abstract public static function Imperial_Aramaic(string $string);
    abstract public static function Palmyrene(string $string);
    abstract public static function Nabataean(string $string);
    abstract public static function Hatran(string $string);
    abstract public static function Phoenician(string $string);
    abstract public static function Lydian(string $string);
    abstract public static function Meroitic_Hieroglyphs(string $string);
    abstract public static function Meroitic_Cursive(string $string);
    abstract public static function Kharoshthi(string $string);
    abstract public static function Old_South_Arabian(string $string);
    abstract public static function Old_North_Arabian(string $string);
    abstract public static function Manichaean(string $string);
    abstract public static function Avestan(string $string);
    abstract public static function Inscriptional_Parthian(string $string);
    abstract public static function Inscriptional_Pahlavi(string $string);
    abstract public static function Psalter_Pahlavi(string $string);
    abstract public static function Old_Turkic(string $string);
    abstract public static function Old_Hungarian(string $string);
    abstract public static function Rumi_Numeral_Symbols(string $string);
    abstract public static function Brahmi(string $string);
    abstract public static function Kaithi(string $string);
    abstract public static function Sora_Sompeng(string $string);
    abstract public static function Chakma(string $string);
    abstract public static function Mahajani(string $string);
    abstract public static function Sharada(string $string);
    abstract public static function Sinhala_Archaic_Numbers(string $string);
    abstract public static function Khojki(string $string);
    abstract public static function Multani(string $string);
    abstract public static function Khudawadi(string $string);
    abstract public static function Grantha(string $string);
    abstract public static function Newa(string $string);
    abstract public static function Tirhuta(string $string);
    abstract public static function Siddham(string $string);
    abstract public static function Modi(string $string);
    abstract public static function Mongolian_Supplement(string $string);
    abstract public static function Takri(string $string);
    abstract public static function Ahom(string $string);
    abstract public static function Warang_Citi(string $string);
    abstract public static function Zanabazar_Square(string $string);
    abstract public static function Soyombo(string $string);
    abstract public static function Pau_Cin_Hau(string $string);
    abstract public static function Bhaiksuki(string $string);
    abstract public static function Marchen(string $string);
    abstract public static function Masaram_Gondi(string $string);
    abstract public static function Cuneiform(string $string);
    abstract public static function Cuneiform_Numbers_And_Punctuation(string $string);
    abstract public static function Early_Dynastic_Cuneiform(string $string);
    abstract public static function Egyptian_Hieroglyphs(string $string);
    abstract public static function Anatolian_Hieroglyphs(string $string);
    abstract public static function Bamum_Supplement(string $string);
    abstract public static function Mro(string $string);
    abstract public static function Bassa_Vah(string $string);
    abstract public static function Pahawh_Hmong(string $string);
    abstract public static function Miao(string $string);
    abstract public static function Ideographic_Symbols_And_Punctuation(string $string);
    abstract public static function Tangut(string $string);
    abstract public static function Tangut_Components(string $string);
    abstract public static function Kana_Supplement(string $string);
    abstract public static function Kana_Extended_A(string $string);
    abstract public static function Nushu(string $string);
    abstract public static function Duployan(string $string);
    abstract public static function Shorthand_Format_Controls(string $string);
    abstract public static function Byzantine_Musical_Symbols(string $string);
    abstract public static function Musical_Symbols(string $string);
    abstract public static function Ancient_Greek_Musical_Notation(string $string);
    abstract public static function Tai_Xuan_Jing_Symbols(string $string);
    abstract public static function Counting_Rod_Numerals(string $string);
    abstract public static function Mathematical_Alphanumeric_Symbols(string $string);
    abstract public static function Sutton_SignWriting(string $string);
    abstract public static function Glagolitic_Supplement(string $string);
    abstract public static function Mende_Kikakui(string $string);
    abstract public static function Adlam(string $string);
    abstract public static function Arabic_Mathematical_Alphabetic_Symbols(string $string);
    abstract public static function Mahjong_Tiles(string $string);
    abstract public static function Domino_Tiles(string $string);
    abstract public static function Playing_Cards(string $string);
    abstract public static function Enclosed_Alphanumeric_Supplement(string $string);
    abstract public static function Enclosed_Ideographic_Supplement(string $string);
    abstract public static function Miscellaneous_Symbols_And_Pictographs(string $string);
    abstract public static function Emoticons(string $string);
    abstract public static function Ornamental_Dingbats(string $string);
    abstract public static function Transport_And_Map_Symbols(string $string);
    abstract public static function Alchemical_Symbols(string $string);
    abstract public static function Geometric_Shapes_Extended(string $string);
    abstract public static function Supplemental_Arrows_C(string $string);
    abstract public static function Supplemental_Symbols_And_Pictographs(string $string);
    abstract public static function CJK_Unified_Ideographs_Extension_B(string $string);
    abstract public static function CJK_Unified_Ideographs_Extension_C(string $string);
    abstract public static function CJK_Unified_Ideographs_Extension_D(string $string);
    abstract public static function CJK_Unified_Ideographs_Extension_E(string $string);
    abstract public static function CJK_Unified_Ideographs_Extension_F(string $string);
    abstract public static function CJK_Compatibility_Ideographs_Supplement(string $string);
    abstract public static function Tags(string $string);
    abstract public static function Variation_Selectors_Supplement(string $string);
    abstract public static function Supplementary_Private_Use_Area_A(string $string);
    abstract public static function Supplementary_Private_Use_Area_B(string $string);
}
