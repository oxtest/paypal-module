<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Catalog;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The product details.
 */
class Product implements JsonSerializable
{
    use BaseModel;

    const CATEGORY_AC_REFRIGERATION_REPAIR = 'AC_REFRIGERATION_REPAIR';
    const CATEGORY_ACADEMIC_SOFTWARE = 'ACADEMIC_SOFTWARE';
    const CATEGORY_ACCESSORIES = 'ACCESSORIES';
    const CATEGORY_ACCOUNTING = 'ACCOUNTING';
    const CATEGORY_ADULT = 'ADULT';
    const CATEGORY_ADVERTISING = 'ADVERTISING';
    const CATEGORY_AFFILIATED_AUTO_RENTAL = 'AFFILIATED_AUTO_RENTAL';
    const CATEGORY_AGENCIES = 'AGENCIES';
    const CATEGORY_AGGREGATORS = 'AGGREGATORS';
    const CATEGORY_AGRICULTURAL_COOPERATIVE_FOR_MAIL_ORDER = 'AGRICULTURAL_COOPERATIVE_FOR_MAIL_ORDER';
    const CATEGORY_AIR_CARRIERS_AIRLINES = 'AIR_CARRIERS_AIRLINES';
    const CATEGORY_AIRLINES = 'AIRLINES';
    const CATEGORY_AIRPORTS_FLYING_FIELDS = 'AIRPORTS_FLYING_FIELDS';
    const CATEGORY_ALCOHOLIC_BEVERAGES = 'ALCOHOLIC_BEVERAGES';
    const CATEGORY_AMUSEMENT_PARKS_CARNIVALS = 'AMUSEMENT_PARKS_CARNIVALS';
    const CATEGORY_ANIMATION = 'ANIMATION';
    const CATEGORY_ANTIQUES = 'ANTIQUES';
    const CATEGORY_APPLIANCES = 'APPLIANCES';
    const CATEGORY_AQUARIAMS_SEAQUARIUMS_DOLPHINARIUMS = 'AQUARIAMS_SEAQUARIUMS_DOLPHINARIUMS';
    const CATEGORY_ARCHITECTURAL_ENGINEERING_AND_SURVEYING_SERVICES = 'ARCHITECTURAL_ENGINEERING_AND_SURVEYING_SERVICES';
    const CATEGORY_ART_AND_CRAFT_SUPPLIES = 'ART_AND_CRAFT_SUPPLIES';
    const CATEGORY_ART_DEALERS_AND_GALLERIES = 'ART_DEALERS_AND_GALLERIES';
    const CATEGORY_ARTIFACTS_GRAVE_RELATED_AND_NATIVE_AMERICAN_CRAFTS = 'ARTIFACTS_GRAVE_RELATED_AND_NATIVE_AMERICAN_CRAFTS';
    const CATEGORY_ARTS_AND_CRAFTS = 'ARTS_AND_CRAFTS';
    const CATEGORY_ARTS_CRAFTS_AND_COLLECTIBLES = 'ARTS_CRAFTS_AND_COLLECTIBLES';
    const CATEGORY_AUDIO_BOOKS = 'AUDIO_BOOKS';
    const CATEGORY_AUTO_ASSOCIATIONS_CLUBS = 'AUTO_ASSOCIATIONS_CLUBS';
    const CATEGORY_AUTO_DEALER_USED_ONLY = 'AUTO_DEALER_USED_ONLY';
    const CATEGORY_AUTO_RENTALS = 'AUTO_RENTALS';
    const CATEGORY_AUTO_SERVICE = 'AUTO_SERVICE';
    const CATEGORY_AUTOMATED_FUEL_DISPENSERS = 'AUTOMATED_FUEL_DISPENSERS';
    const CATEGORY_AUTOMOBILE_ASSOCIATIONS = 'AUTOMOBILE_ASSOCIATIONS';
    const CATEGORY_AUTOMOTIVE = 'AUTOMOTIVE';
    const CATEGORY_AUTOMOTIVE_REPAIR_SHOPS_NON_DEALER = 'AUTOMOTIVE_REPAIR_SHOPS_NON_DEALER';
    const CATEGORY_AUTOMOTIVE_TOP_AND_BODY_SHOPS = 'AUTOMOTIVE_TOP_AND_BODY_SHOPS';
    const CATEGORY_AVIATION = 'AVIATION';
    const CATEGORY_BABIES_CLOTHING_AND_SUPPLIES = 'BABIES_CLOTHING_AND_SUPPLIES';
    const CATEGORY_BABY = 'BABY';
    const CATEGORY_BANDS_ORCHESTRAS_ENTERTAINERS = 'BANDS_ORCHESTRAS_ENTERTAINERS';
    const CATEGORY_BARBIES = 'BARBIES';
    const CATEGORY_BATH_AND_BODY = 'BATH_AND_BODY';
    const CATEGORY_BATTERIES = 'BATTERIES';
    const CATEGORY_BEAN_BABIES = 'BEAN_BABIES';
    const CATEGORY_BEAUTY = 'BEAUTY';
    const CATEGORY_BEAUTY_AND_FRAGRANCES = 'BEAUTY_AND_FRAGRANCES';
    const CATEGORY_BED_AND_BATH = 'BED_AND_BATH';
    const CATEGORY_BICYCLE_SHOPS_SALES_AND_SERVICE = 'BICYCLE_SHOPS_SALES_AND_SERVICE';
    const CATEGORY_BICYCLES_AND_ACCESSORIES = 'BICYCLES_AND_ACCESSORIES';
    const CATEGORY_BILLIARD_POOL_ESTABLISHMENTS = 'BILLIARD_POOL_ESTABLISHMENTS';
    const CATEGORY_BOAT_DEALERS = 'BOAT_DEALERS';
    const CATEGORY_BOAT_RENTALS_AND_LEASING = 'BOAT_RENTALS_AND_LEASING';
    const CATEGORY_BOATING_SAILING_AND_ACCESSORIES = 'BOATING_SAILING_AND_ACCESSORIES';
    const CATEGORY_BOOKS = 'BOOKS';
    const CATEGORY_BOOKS_AND_MAGAZINES = 'BOOKS_AND_MAGAZINES';
    const CATEGORY_BOOKS_MANUSCRIPTS = 'BOOKS_MANUSCRIPTS';
    const CATEGORY_BOOKS_PERIODICALS_AND_NEWSPAPERS = 'BOOKS_PERIODICALS_AND_NEWSPAPERS';
    const CATEGORY_BOWLING_ALLEYS = 'BOWLING_ALLEYS';
    const CATEGORY_BULLETIN_BOARD = 'BULLETIN_BOARD';
    const CATEGORY_BUS_LINE = 'BUS_LINE';
    const CATEGORY_BUS_LINES_CHARTERS_TOUR_BUSES = 'BUS_LINES_CHARTERS_TOUR_BUSES';
    const CATEGORY_BUSINESS = 'BUSINESS';
    const CATEGORY_BUSINESS_AND_SECRETARIAL_SCHOOLS = 'BUSINESS_AND_SECRETARIAL_SCHOOLS';
    const CATEGORY_BUYING_AND_SHOPPING_SERVICES_AND_CLUBS = 'BUYING_AND_SHOPPING_SERVICES_AND_CLUBS';
    const CATEGORY_CABLE_SATELLITE_AND_OTHER_PAY_TELEVISION_AND_RADIO_SERVICES = 'CABLE_SATELLITE_AND_OTHER_PAY_TELEVISION_AND_RADIO_SERVICES';
    const CATEGORY_CABLE_SATELLITE_AND_OTHER_PAY_TV_AND_RADIO = 'CABLE_SATELLITE_AND_OTHER_PAY_TV_AND_RADIO';
    const CATEGORY_CAMERA_AND_PHOTOGRAPHIC_SUPPLIES = 'CAMERA_AND_PHOTOGRAPHIC_SUPPLIES';
    const CATEGORY_CAMERAS = 'CAMERAS';
    const CATEGORY_CAMERAS_AND_PHOTOGRAPHY = 'CAMERAS_AND_PHOTOGRAPHY';
    const CATEGORY_CAMPER_RECREATIONAL_AND_UTILITY_TRAILER_DEALERS = 'CAMPER_RECREATIONAL_AND_UTILITY_TRAILER_DEALERS';
    const CATEGORY_CAMPING_AND_OUTDOORS = 'CAMPING_AND_OUTDOORS';
    const CATEGORY_CAMPING_AND_SURVIVAL = 'CAMPING_AND_SURVIVAL';
    const CATEGORY_CAR_AND_TRUCK_DEALERS = 'CAR_AND_TRUCK_DEALERS';
    const CATEGORY_CAR_AND_TRUCK_DEALERS_USED_ONLY = 'CAR_AND_TRUCK_DEALERS_USED_ONLY';
    const CATEGORY_CAR_AUDIO_AND_ELECTRONICS = 'CAR_AUDIO_AND_ELECTRONICS';
    const CATEGORY_CAR_RENTAL_AGENCY = 'CAR_RENTAL_AGENCY';
    const CATEGORY_CATALOG_MERCHANT = 'CATALOG_MERCHANT';
    const CATEGORY_CATALOG_RETAIL_MERCHANT = 'CATALOG_RETAIL_MERCHANT';
    const CATEGORY_CATERING_SERVICES = 'CATERING_SERVICES';
    const CATEGORY_CHARITY = 'CHARITY';
    const CATEGORY_CHECK_CASHIER = 'CHECK_CASHIER';
    const CATEGORY_CHILD_CARE_SERVICES = 'CHILD_CARE_SERVICES';
    const CATEGORY_CHILDREN_BOOKS = 'CHILDREN_BOOKS';
    const CATEGORY_CHIROPODISTS_PODIATRISTS = 'CHIROPODISTS_PODIATRISTS';
    const CATEGORY_CHIROPRACTORS = 'CHIROPRACTORS';
    const CATEGORY_CIGAR_STORES_AND_STANDS = 'CIGAR_STORES_AND_STANDS';
    const CATEGORY_CIVIC_SOCIAL_FRATERNAL_ASSOCIATIONS = 'CIVIC_SOCIAL_FRATERNAL_ASSOCIATIONS';
    const CATEGORY_CIVIL_SOCIAL_FRAT_ASSOCIATIONS = 'CIVIL_SOCIAL_FRAT_ASSOCIATIONS';
    const CATEGORY_CLOTHING = 'CLOTHING';
    const CATEGORY_CLOTHING_ACCESSORIES_AND_SHOES = 'CLOTHING_ACCESSORIES_AND_SHOES';
    const CATEGORY_CLOTHING_RENTAL = 'CLOTHING_RENTAL';
    const CATEGORY_COFFEE_AND_TEA = 'COFFEE_AND_TEA';
    const CATEGORY_COIN_OPERATED_BANKS_AND_CASINOS = 'COIN_OPERATED_BANKS_AND_CASINOS';
    const CATEGORY_COLLECTIBLES = 'COLLECTIBLES';
    const CATEGORY_COLLECTION_AGENCY = 'COLLECTION_AGENCY';
    const CATEGORY_COLLEGES_AND_UNIVERSITIES = 'COLLEGES_AND_UNIVERSITIES';
    const CATEGORY_COMMERCIAL_EQUIPMENT = 'COMMERCIAL_EQUIPMENT';
    const CATEGORY_COMMERCIAL_FOOTWEAR = 'COMMERCIAL_FOOTWEAR';
    const CATEGORY_COMMERCIAL_PHOTOGRAPHY = 'COMMERCIAL_PHOTOGRAPHY';
    const CATEGORY_COMMERCIAL_PHOTOGRAPHY_ART_AND_GRAPHICS = 'COMMERCIAL_PHOTOGRAPHY_ART_AND_GRAPHICS';
    const CATEGORY_COMMERCIAL_SPORTS_PROFESSIONA = 'COMMERCIAL_SPORTS_PROFESSIONA';
    const CATEGORY_COMMODITIES_AND_FUTURES_EXCHANGE = 'COMMODITIES_AND_FUTURES_EXCHANGE';
    const CATEGORY_COMPUTER_AND_DATA_PROCESSING_SERVICES = 'COMPUTER_AND_DATA_PROCESSING_SERVICES';
    const CATEGORY_COMPUTER_HARDWARE_AND_SOFTWARE = 'COMPUTER_HARDWARE_AND_SOFTWARE';
    const CATEGORY_COMPUTER_MAINTENANCE_REPAIR_AND_SERVICES_NOT_ELSEWHERE_CLAS = 'COMPUTER_MAINTENANCE_REPAIR_AND_SERVICES_NOT_ELSEWHERE_CLAS';
    const CATEGORY_CONSTRUCTION = 'CONSTRUCTION';
    const CATEGORY_CONSTRUCTION_MATERIALS_NOT_ELSEWHERE_CLASSIFIED = 'CONSTRUCTION_MATERIALS_NOT_ELSEWHERE_CLASSIFIED';
    const CATEGORY_CONSULTING_SERVICES = 'CONSULTING_SERVICES';
    const CATEGORY_CONSUMER_CREDIT_REPORTING_AGENCIES = 'CONSUMER_CREDIT_REPORTING_AGENCIES';
    const CATEGORY_CONVALESCENT_HOMES = 'CONVALESCENT_HOMES';
    const CATEGORY_COSMETIC_STORES = 'COSMETIC_STORES';
    const CATEGORY_COUNSELING_SERVICES_DEBT_MARRIAGE_PERSONAL = 'COUNSELING_SERVICES_DEBT_MARRIAGE_PERSONAL';
    const CATEGORY_COUNTERFEIT_CURRENCY_AND_STAMPS = 'COUNTERFEIT_CURRENCY_AND_STAMPS';
    const CATEGORY_COUNTERFEIT_ITEMS = 'COUNTERFEIT_ITEMS';
    const CATEGORY_COUNTRY_CLUBS = 'COUNTRY_CLUBS';
    const CATEGORY_COURIER_SERVICES = 'COURIER_SERVICES';
    const CATEGORY_COURIER_SERVICES_AIR_AND_GROUND_AND_FREIGHT_FORWARDERS = 'COURIER_SERVICES_AIR_AND_GROUND_AND_FREIGHT_FORWARDERS';
    const CATEGORY_COURT_COSTS_ALIMNY_CHILD_SUPT = 'COURT_COSTS_ALIMNY_CHILD_SUPT';
    const CATEGORY_COURT_COSTS_INCLUDING_ALIMONY_AND_CHILD_SUPPORT_COURTS_OF_LAW = 'COURT_COSTS_INCLUDING_ALIMONY_AND_CHILD_SUPPORT_COURTS_OF_LAW';
    const CATEGORY_CREDIT_CARDS = 'CREDIT_CARDS';
    const CATEGORY_CREDIT_UNION = 'CREDIT_UNION';
    const CATEGORY_CULTURE_AND_RELIGION = 'CULTURE_AND_RELIGION';
    const CATEGORY_DAIRY_PRODUCTS_STORES = 'DAIRY_PRODUCTS_STORES';
    const CATEGORY_DANCE_HALLS_STUDIOS_AND_SCHOOLS = 'DANCE_HALLS_STUDIOS_AND_SCHOOLS';
    const CATEGORY_DECORATIVE = 'DECORATIVE';
    const CATEGORY_DENTAL = 'DENTAL';
    const CATEGORY_DENTISTS_AND_ORTHODONTISTS = 'DENTISTS_AND_ORTHODONTISTS';
    const CATEGORY_DEPARTMENT_STORES = 'DEPARTMENT_STORES';
    const CATEGORY_DESKTOP_PCS = 'DESKTOP_PCS';
    const CATEGORY_DEVICES = 'DEVICES';
    const CATEGORY_DIECAST_TOYS_VEHICLES = 'DIECAST_TOYS_VEHICLES';
    const CATEGORY_DIGITAL_GAMES = 'DIGITAL_GAMES';
    const CATEGORY_DIGITAL_MEDIA_BOOKS_MOVIES_MUSIC = 'DIGITAL_MEDIA_BOOKS_MOVIES_MUSIC';
    const CATEGORY_DIRECT_MARKETING = 'DIRECT_MARKETING';
    const CATEGORY_DIRECT_MARKETING_CATALOG_MERCHANT = 'DIRECT_MARKETING_CATALOG_MERCHANT';
    const CATEGORY_DIRECT_MARKETING_INBOUND_TELE = 'DIRECT_MARKETING_INBOUND_TELE';
    const CATEGORY_DIRECT_MARKETING_OUTBOUND_TELE = 'DIRECT_MARKETING_OUTBOUND_TELE';
    const CATEGORY_DIRECT_MARKETING_SUBSCRIPTION = 'DIRECT_MARKETING_SUBSCRIPTION';
    const CATEGORY_DISCOUNT_STORES = 'DISCOUNT_STORES';
    const CATEGORY_DOOR_TO_DOOR_SALES = 'DOOR_TO_DOOR_SALES';
    const CATEGORY_DRAPERY_WINDOW_COVERING_AND_UPHOLSTERY = 'DRAPERY_WINDOW_COVERING_AND_UPHOLSTERY';
    const CATEGORY_DRINKING_PLACES = 'DRINKING_PLACES';
    const CATEGORY_DRUGSTORE = 'DRUGSTORE';
    const CATEGORY_DURABLE_GOODS = 'DURABLE_GOODS';
    const CATEGORY_ECOMMERCE_DEVELOPMENT = 'ECOMMERCE_DEVELOPMENT';
    const CATEGORY_ECOMMERCE_SERVICES = 'ECOMMERCE_SERVICES';
    const CATEGORY_EDUCATIONAL_AND_TEXTBOOKS = 'EDUCATIONAL_AND_TEXTBOOKS';
    const CATEGORY_ELECTRIC_RAZOR_STORES = 'ELECTRIC_RAZOR_STORES';
    const CATEGORY_ELECTRICAL_AND_SMALL_APPLIANCE_REPAIR = 'ELECTRICAL_AND_SMALL_APPLIANCE_REPAIR';
    const CATEGORY_ELECTRICAL_CONTRACTORS = 'ELECTRICAL_CONTRACTORS';
    const CATEGORY_ELECTRICAL_PARTS_AND_EQUIPMENT = 'ELECTRICAL_PARTS_AND_EQUIPMENT';
    const CATEGORY_ELECTRONIC_CASH = 'ELECTRONIC_CASH';
    const CATEGORY_ELEMENTARY_AND_SECONDARY_SCHOOLS = 'ELEMENTARY_AND_SECONDARY_SCHOOLS';
    const CATEGORY_EMPLOYMENT = 'EMPLOYMENT';
    const CATEGORY_ENTERTAINERS = 'ENTERTAINERS';
    const CATEGORY_ENTERTAINMENT_AND_MEDIA = 'ENTERTAINMENT_AND_MEDIA';
    const CATEGORY_EQUIP_TOOL_FURNITURE_AND_APPLIANCE_RENTAL_AND_LEASING = 'EQUIP_TOOL_FURNITURE_AND_APPLIANCE_RENTAL_AND_LEASING';
    const CATEGORY_ESCROW = 'ESCROW';
    const CATEGORY_EVENT_AND_WEDDING_PLANNING = 'EVENT_AND_WEDDING_PLANNING';
    const CATEGORY_EXERCISE_AND_FITNESS = 'EXERCISE_AND_FITNESS';
    const CATEGORY_EXERCISE_EQUIPMENT = 'EXERCISE_EQUIPMENT';
    const CATEGORY_EXTERMINATING_AND_DISINFECTING_SERVICES = 'EXTERMINATING_AND_DISINFECTING_SERVICES';
    const CATEGORY_FABRICS_AND_SEWING = 'FABRICS_AND_SEWING';
    const CATEGORY_FAMILY_CLOTHING_STORES = 'FAMILY_CLOTHING_STORES';
    const CATEGORY_FASHION_JEWELRY = 'FASHION_JEWELRY';
    const CATEGORY_FAST_FOOD_RESTAURANTS = 'FAST_FOOD_RESTAURANTS';
    const CATEGORY_FICTION_AND_NONFICTION = 'FICTION_AND_NONFICTION';
    const CATEGORY_FINANCE_COMPANY = 'FINANCE_COMPANY';
    const CATEGORY_FINANCIAL_AND_INVESTMENT_ADVICE = 'FINANCIAL_AND_INVESTMENT_ADVICE';
    const CATEGORY_FINANCIAL_INSTITUTIONS_MERCHANDISE_AND_SERVICES = 'FINANCIAL_INSTITUTIONS_MERCHANDISE_AND_SERVICES';
    const CATEGORY_FIREARM_ACCESSORIES = 'FIREARM_ACCESSORIES';
    const CATEGORY_FIREARMS_WEAPONS_AND_KNIVES = 'FIREARMS_WEAPONS_AND_KNIVES';
    const CATEGORY_FIREPLACE_AND_FIREPLACE_SCREENS = 'FIREPLACE_AND_FIREPLACE_SCREENS';
    const CATEGORY_FIREWORKS = 'FIREWORKS';
    const CATEGORY_FISHING = 'FISHING';
    const CATEGORY_FLORISTS = 'FLORISTS';
    const CATEGORY_FLOWERS = 'FLOWERS';
    const CATEGORY_FOOD_DRINK_AND_NUTRITION = 'FOOD_DRINK_AND_NUTRITION';
    const CATEGORY_FOOD_PRODUCTS = 'FOOD_PRODUCTS';
    const CATEGORY_FOOD_RETAIL_AND_SERVICE = 'FOOD_RETAIL_AND_SERVICE';
    const CATEGORY_FRAGRANCES_AND_PERFUMES = 'FRAGRANCES_AND_PERFUMES';
    const CATEGORY_FREEZER_AND_LOCKER_MEAT_PROVISIONERS = 'FREEZER_AND_LOCKER_MEAT_PROVISIONERS';
    const CATEGORY_FUEL_DEALERS_FUEL_OIL_WOOD_AND_COAL = 'FUEL_DEALERS_FUEL_OIL_WOOD_AND_COAL';
    const CATEGORY_FUEL_DEALERS_NON_AUTOMOTIVE = 'FUEL_DEALERS_NON_AUTOMOTIVE';
    const CATEGORY_FUNERAL_SERVICES_AND_CREMATORIES = 'FUNERAL_SERVICES_AND_CREMATORIES';
    const CATEGORY_FURNISHING_AND_DECORATING = 'FURNISHING_AND_DECORATING';
    const CATEGORY_FURNITURE = 'FURNITURE';
    const CATEGORY_FURRIERS_AND_FUR_SHOPS = 'FURRIERS_AND_FUR_SHOPS';
    const CATEGORY_GADGETS_AND_OTHER_ELECTRONICS = 'GADGETS_AND_OTHER_ELECTRONICS';
    const CATEGORY_GAMBLING = 'GAMBLING';
    const CATEGORY_GAME_SOFTWARE = 'GAME_SOFTWARE';
    const CATEGORY_GAMES = 'GAMES';
    const CATEGORY_GARDEN_SUPPLIES = 'GARDEN_SUPPLIES';
    const CATEGORY_GENERAL = 'GENERAL';
    const CATEGORY_GENERAL_CONTRACTORS = 'GENERAL_CONTRACTORS';
    const CATEGORY_GENERAL_GOVERNMENT = 'GENERAL_GOVERNMENT';
    const CATEGORY_GENERAL_SOFTWARE = 'GENERAL_SOFTWARE';
    const CATEGORY_GENERAL_TELECOM = 'GENERAL_TELECOM';
    const CATEGORY_GIFTS_AND_FLOWERS = 'GIFTS_AND_FLOWERS';
    const CATEGORY_GLASS_PAINT_AND_WALLPAPER_STORES = 'GLASS_PAINT_AND_WALLPAPER_STORES';
    const CATEGORY_GLASSWARE_CRYSTAL_STORES = 'GLASSWARE_CRYSTAL_STORES';
    const CATEGORY_GOVERNMENT = 'GOVERNMENT';
    const CATEGORY_GOVERNMENT_IDS_AND_LICENSES = 'GOVERNMENT_IDS_AND_LICENSES';
    const CATEGORY_GOVERNMENT_LICENSED_ON_LINE_CASINOS_ON_LINE_GAMBLING = 'GOVERNMENT_LICENSED_ON_LINE_CASINOS_ON_LINE_GAMBLING';
    const CATEGORY_GOVERNMENT_OWNED_LOTTERIES = 'GOVERNMENT_OWNED_LOTTERIES';
    const CATEGORY_GOVERNMENT_SERVICES = 'GOVERNMENT_SERVICES';
    const CATEGORY_GRAPHIC_AND_COMMERCIAL_DESIGN = 'GRAPHIC_AND_COMMERCIAL_DESIGN';
    const CATEGORY_GREETING_CARDS = 'GREETING_CARDS';
    const CATEGORY_GROCERY_STORES_AND_SUPERMARKETS = 'GROCERY_STORES_AND_SUPERMARKETS';
    const CATEGORY_HARDWARE_AND_TOOLS = 'HARDWARE_AND_TOOLS';
    const CATEGORY_HARDWARE_EQUIPMENT_AND_SUPPLIES = 'HARDWARE_EQUIPMENT_AND_SUPPLIES';
    const CATEGORY_HAZARDOUS_RESTRICTED_AND_PERISHABLE_ITEMS = 'HAZARDOUS_RESTRICTED_AND_PERISHABLE_ITEMS';
    const CATEGORY_HEALTH_AND_BEAUTY_SPAS = 'HEALTH_AND_BEAUTY_SPAS';
    const CATEGORY_HEALTH_AND_NUTRITION = 'HEALTH_AND_NUTRITION';
    const CATEGORY_HEALTH_AND_PERSONAL_CARE = 'HEALTH_AND_PERSONAL_CARE';
    const CATEGORY_HEARING_AIDS_SALES_AND_SUPPLIES = 'HEARING_AIDS_SALES_AND_SUPPLIES';
    const CATEGORY_HEATING_PLUMBING_AC = 'HEATING_PLUMBING_AC';
    const CATEGORY_HIGH_RISK_MERCHANT = 'HIGH_RISK_MERCHANT';
    const CATEGORY_HIRING_SERVICES = 'HIRING_SERVICES';
    const CATEGORY_HOBBIES_TOYS_AND_GAMES = 'HOBBIES_TOYS_AND_GAMES';
    const CATEGORY_HOME_AND_GARDEN = 'HOME_AND_GARDEN';
    const CATEGORY_HOME_AUDIO = 'HOME_AUDIO';
    const CATEGORY_HOME_DECOR = 'HOME_DECOR';
    const CATEGORY_HOME_ELECTRONICS = 'HOME_ELECTRONICS';
    const CATEGORY_HOSPITALS = 'HOSPITALS';
    const CATEGORY_HOTELS_MOTELS_INNS_RESORTS = 'HOTELS_MOTELS_INNS_RESORTS';
    const CATEGORY_HOUSEWARES = 'HOUSEWARES';
    const CATEGORY_HUMAN_PARTS_AND_REMAINS = 'HUMAN_PARTS_AND_REMAINS';
    const CATEGORY_HUMOROUS_GIFTS_AND_NOVELTIES = 'HUMOROUS_GIFTS_AND_NOVELTIES';
    const CATEGORY_HUNTING = 'HUNTING';
    const CATEGORY_IDS_LICENSES_AND_PASSPORTS = 'IDS_LICENSES_AND_PASSPORTS';
    const CATEGORY_ILLEGAL_DRUGS_AND_PARAPHERNALIA = 'ILLEGAL_DRUGS_AND_PARAPHERNALIA';
    const CATEGORY_INDUSTRIAL = 'INDUSTRIAL';
    const CATEGORY_INDUSTRIAL_AND_MANUFACTURING_SUPPLIES = 'INDUSTRIAL_AND_MANUFACTURING_SUPPLIES';
    const CATEGORY_INSURANCE_AUTO_AND_HOME = 'INSURANCE_AUTO_AND_HOME';
    const CATEGORY_INSURANCE_DIRECT = 'INSURANCE_DIRECT';
    const CATEGORY_INSURANCE_LIFE_AND_ANNUITY = 'INSURANCE_LIFE_AND_ANNUITY';
    const CATEGORY_INSURANCE_SALES_UNDERWRITING = 'INSURANCE_SALES_UNDERWRITING';
    const CATEGORY_INSURANCE_UNDERWRITING_PREMIUMS = 'INSURANCE_UNDERWRITING_PREMIUMS';
    const CATEGORY_INTERNET_AND_NETWORK_SERVICES = 'INTERNET_AND_NETWORK_SERVICES';
    const CATEGORY_INTRA_COMPANY_PURCHASES = 'INTRA_COMPANY_PURCHASES';
    const CATEGORY_LABORATORIES_DENTAL_MEDICAL = 'LABORATORIES_DENTAL_MEDICAL';
    const CATEGORY_LANDSCAPING = 'LANDSCAPING';
    const CATEGORY_LANDSCAPING_AND_HORTICULTURAL_SERVICES = 'LANDSCAPING_AND_HORTICULTURAL_SERVICES';
    const CATEGORY_LAUNDRY_CLEANING_SERVICES = 'LAUNDRY_CLEANING_SERVICES';
    const CATEGORY_LEGAL = 'LEGAL';
    const CATEGORY_LEGAL_SERVICES_AND_ATTORNEYS = 'LEGAL_SERVICES_AND_ATTORNEYS';
    const CATEGORY_LOCAL_DELIVERY_SERVICE = 'LOCAL_DELIVERY_SERVICE';
    const CATEGORY_LOCKSMITH = 'LOCKSMITH';
    const CATEGORY_LODGING_AND_ACCOMMODATIONS = 'LODGING_AND_ACCOMMODATIONS';
    const CATEGORY_LOTTERY_AND_CONTESTS = 'LOTTERY_AND_CONTESTS';
    const CATEGORY_LUGGAGE_AND_LEATHER_GOODS = 'LUGGAGE_AND_LEATHER_GOODS';
    const CATEGORY_LUMBER_AND_BUILDING_MATERIALS = 'LUMBER_AND_BUILDING_MATERIALS';
    const CATEGORY_MAGAZINES = 'MAGAZINES';
    const CATEGORY_MAINTENANCE_AND_REPAIR_SERVICES = 'MAINTENANCE_AND_REPAIR_SERVICES';
    const CATEGORY_MAKEUP_AND_COSMETICS = 'MAKEUP_AND_COSMETICS';
    const CATEGORY_MANUAL_CASH_DISBURSEMENTS = 'MANUAL_CASH_DISBURSEMENTS';
    const CATEGORY_MASSAGE_PARLORS = 'MASSAGE_PARLORS';
    const CATEGORY_MEDICAL = 'MEDICAL';
    const CATEGORY_MEDICAL_AND_PHARMACEUTICAL = 'MEDICAL_AND_PHARMACEUTICAL';
    const CATEGORY_MEDICAL_CARE = 'MEDICAL_CARE';
    const CATEGORY_MEDICAL_EQUIPMENT_AND_SUPPLIES = 'MEDICAL_EQUIPMENT_AND_SUPPLIES';
    const CATEGORY_MEDICAL_SERVICES = 'MEDICAL_SERVICES';
    const CATEGORY_MEETING_PLANNERS = 'MEETING_PLANNERS';
    const CATEGORY_MEMBERSHIP_CLUBS_AND_ORGANIZATIONS = 'MEMBERSHIP_CLUBS_AND_ORGANIZATIONS';
    const CATEGORY_MEMBERSHIP_COUNTRY_CLUBS_GOLF = 'MEMBERSHIP_COUNTRY_CLUBS_GOLF';
    const CATEGORY_MEMORABILIA = 'MEMORABILIA';
    const CATEGORY_MEN_AND_BOY_CLOTHING_AND_ACCESSORY_STORES = 'MEN_AND_BOY_CLOTHING_AND_ACCESSORY_STORES';
    const CATEGORY_MEN_CLOTHING = 'MEN_CLOTHING';
    const CATEGORY_MERCHANDISE = 'MERCHANDISE';
    const CATEGORY_METAPHYSICAL = 'METAPHYSICAL';
    const CATEGORY_MILITARIA = 'MILITARIA';
    const CATEGORY_MILITARY_AND_CIVIL_SERVICE_UNIFORMS = 'MILITARY_AND_CIVIL_SERVICE_UNIFORMS';
    const CATEGORY_MISC__AUTOMOTIVE_AIRCRAFT_AND_FARM_EQUIPMENT_DEALERS = 'MISC._AUTOMOTIVE_AIRCRAFT_AND_FARM_EQUIPMENT_DEALERS';
    const CATEGORY_MISC__GENERAL_MERCHANDISE = 'MISC._GENERAL_MERCHANDISE';
    const CATEGORY_MISCELLANEOUS_GENERAL_SERVICES = 'MISCELLANEOUS_GENERAL_SERVICES';
    const CATEGORY_MISCELLANEOUS_REPAIR_SHOPS_AND_RELATED_SERVICES = 'MISCELLANEOUS_REPAIR_SHOPS_AND_RELATED_SERVICES';
    const CATEGORY_MODEL_KITS = 'MODEL_KITS';
    const CATEGORY_MONEY_TRANSFER_MEMBER_FINANCIAL_INSTITUTION = 'MONEY_TRANSFER_MEMBER_FINANCIAL_INSTITUTION';
    const CATEGORY_MONEY_TRANSFER_MERCHANT = 'MONEY_TRANSFER_MERCHANT';
    const CATEGORY_MOTION_PICTURE_THEATERS = 'MOTION_PICTURE_THEATERS';
    const CATEGORY_MOTOR_FREIGHT_CARRIERS_AND_TRUCKING = 'MOTOR_FREIGHT_CARRIERS_AND_TRUCKING';
    const CATEGORY_MOTOR_HOME_AND_RECREATIONAL_VEHICLE_RENTAL = 'MOTOR_HOME_AND_RECREATIONAL_VEHICLE_RENTAL';
    const CATEGORY_MOTOR_HOMES_DEALERS = 'MOTOR_HOMES_DEALERS';
    const CATEGORY_MOTOR_VEHICLE_SUPPLIES_AND_NEW_PARTS = 'MOTOR_VEHICLE_SUPPLIES_AND_NEW_PARTS';
    const CATEGORY_MOTORCYCLE_DEALERS = 'MOTORCYCLE_DEALERS';
    const CATEGORY_MOTORCYCLES = 'MOTORCYCLES';
    const CATEGORY_MOVIE = 'MOVIE';
    const CATEGORY_MOVIE_TICKETS = 'MOVIE_TICKETS';
    const CATEGORY_MOVING_AND_STORAGE = 'MOVING_AND_STORAGE';
    const CATEGORY_MULTI_LEVEL_MARKETING = 'MULTI_LEVEL_MARKETING';
    const CATEGORY_MUSIC_CDS_CASSETTES_AND_ALBUMS = 'MUSIC_CDS_CASSETTES_AND_ALBUMS';
    const CATEGORY_MUSIC_STORE_INSTRUMENTS_AND_SHEET_MUSIC = 'MUSIC_STORE_INSTRUMENTS_AND_SHEET_MUSIC';
    const CATEGORY_NETWORKING = 'NETWORKING';
    const CATEGORY_NEW_AGE = 'NEW_AGE';
    const CATEGORY_NEW_PARTS_AND_SUPPLIES_MOTOR_VEHICLE = 'NEW_PARTS_AND_SUPPLIES_MOTOR_VEHICLE';
    const CATEGORY_NEWS_DEALERS_AND_NEWSTANDS = 'NEWS_DEALERS_AND_NEWSTANDS';
    const CATEGORY_NON_DURABLE_GOODS = 'NON_DURABLE_GOODS';
    const CATEGORY_NON_FICTION = 'NON_FICTION';
    const CATEGORY_NON_PROFIT_POLITICAL_AND_RELIGION = 'NON_PROFIT_POLITICAL_AND_RELIGION';
    const CATEGORY_NONPROFIT = 'NONPROFIT';
    const CATEGORY_NOVELTIES = 'NOVELTIES';
    const CATEGORY_OEM_SOFTWARE = 'OEM_SOFTWARE';
    const CATEGORY_OFFICE_SUPPLIES_AND_EQUIPMENT = 'OFFICE_SUPPLIES_AND_EQUIPMENT';
    const CATEGORY_ONLINE_DATING = 'ONLINE_DATING';
    const CATEGORY_ONLINE_GAMING = 'ONLINE_GAMING';
    const CATEGORY_ONLINE_GAMING_CURRENCY = 'ONLINE_GAMING_CURRENCY';
    const CATEGORY_ONLINE_SERVICES = 'ONLINE_SERVICES';
    const CATEGORY_OOUTBOUND_TELEMARKETING_MERCH = 'OOUTBOUND_TELEMARKETING_MERCH';
    const CATEGORY_OPHTHALMOLOGISTS_OPTOMETRIST = 'OPHTHALMOLOGISTS_OPTOMETRIST';
    const CATEGORY_OPTICIANS_AND_DISPENSING = 'OPTICIANS_AND_DISPENSING';
    const CATEGORY_ORTHOPEDIC_GOODS_PROSTHETICS = 'ORTHOPEDIC_GOODS_PROSTHETICS';
    const CATEGORY_OSTEOPATHS = 'OSTEOPATHS';
    const CATEGORY_OTHER = 'OTHER';
    const CATEGORY_PACKAGE_TOUR_OPERATORS = 'PACKAGE_TOUR_OPERATORS';
    const CATEGORY_PAINTBALL = 'PAINTBALL';
    const CATEGORY_PAINTS_VARNISHES_AND_SUPPLIES = 'PAINTS_VARNISHES_AND_SUPPLIES';
    const CATEGORY_PARKING_LOTS_AND_GARAGES = 'PARKING_LOTS_AND_GARAGES';
    const CATEGORY_PARTS_AND_ACCESSORIES = 'PARTS_AND_ACCESSORIES';
    const CATEGORY_PAWN_SHOPS = 'PAWN_SHOPS';
    const CATEGORY_PAYCHECK_LENDER_OR_CASH_ADVANCE = 'PAYCHECK_LENDER_OR_CASH_ADVANCE';
    const CATEGORY_PERIPHERALS = 'PERIPHERALS';
    const CATEGORY_PERSONALIZED_GIFTS = 'PERSONALIZED_GIFTS';
    const CATEGORY_PET_SHOPS_PET_FOOD_AND_SUPPLIES = 'PET_SHOPS_PET_FOOD_AND_SUPPLIES';
    const CATEGORY_PETROLEUM_AND_PETROLEUM_PRODUCTS = 'PETROLEUM_AND_PETROLEUM_PRODUCTS';
    const CATEGORY_PETS_AND_ANIMALS = 'PETS_AND_ANIMALS';
    const CATEGORY_PHOTOFINISHING_LABORATORIES_PHOTO_DEVELOPING = 'PHOTOFINISHING_LABORATORIES_PHOTO_DEVELOPING';
    const CATEGORY_PHOTOGRAPHIC_STUDIOS_PORTRAITS = 'PHOTOGRAPHIC_STUDIOS_PORTRAITS';
    const CATEGORY_PHOTOGRAPHY = 'PHOTOGRAPHY';
    const CATEGORY_PHYSICAL_GOOD = 'PHYSICAL_GOOD';
    const CATEGORY_PICTURE_VIDEO_PRODUCTION = 'PICTURE_VIDEO_PRODUCTION';
    const CATEGORY_PIECE_GOODS_NOTIONS_AND_OTHER_DRY_GOODS = 'PIECE_GOODS_NOTIONS_AND_OTHER_DRY_GOODS';
    const CATEGORY_PLANTS_AND_SEEDS = 'PLANTS_AND_SEEDS';
    const CATEGORY_PLUMBING_AND_HEATING_EQUIPMENTS_AND_SUPPLIES = 'PLUMBING_AND_HEATING_EQUIPMENTS_AND_SUPPLIES';
    const CATEGORY_POLICE_RELATED_ITEMS = 'POLICE_RELATED_ITEMS';
    const CATEGORY_POLITICAL_ORGANIZATIONS = 'POLITICAL_ORGANIZATIONS';
    const CATEGORY_POSTAL_SERVICES_GOVERNMENT_ONLY = 'POSTAL_SERVICES_GOVERNMENT_ONLY';
    const CATEGORY_POSTERS = 'POSTERS';
    const CATEGORY_PREPAID_AND_STORED_VALUE_CARDS = 'PREPAID_AND_STORED_VALUE_CARDS';
    const CATEGORY_PRESCRIPTION_DRUGS = 'PRESCRIPTION_DRUGS';
    const CATEGORY_PROMOTIONAL_ITEMS = 'PROMOTIONAL_ITEMS';
    const CATEGORY_PUBLIC_WAREHOUSING_AND_STORAGE = 'PUBLIC_WAREHOUSING_AND_STORAGE';
    const CATEGORY_PUBLISHING_AND_PRINTING = 'PUBLISHING_AND_PRINTING';
    const CATEGORY_PUBLISHING_SERVICES = 'PUBLISHING_SERVICES';
    const CATEGORY_RADAR_DECTORS = 'RADAR_DECTORS';
    const CATEGORY_RADIO_TELEVISION_AND_STEREO_REPAIR = 'RADIO_TELEVISION_AND_STEREO_REPAIR';
    const CATEGORY_REAL_ESTATE = 'REAL_ESTATE';
    const CATEGORY_REAL_ESTATE_AGENT = 'REAL_ESTATE_AGENT';
    const CATEGORY_REAL_ESTATE_AGENTS_AND_MANAGERS_RENTALS = 'REAL_ESTATE_AGENTS_AND_MANAGERS_RENTALS';
    const CATEGORY_RELIGION_AND_SPIRITUALITY_FOR_PROFIT = 'RELIGION_AND_SPIRITUALITY_FOR_PROFIT';
    const CATEGORY_RELIGIOUS = 'RELIGIOUS';
    const CATEGORY_RELIGIOUS_ORGANIZATIONS = 'RELIGIOUS_ORGANIZATIONS';
    const CATEGORY_REMITTANCE = 'REMITTANCE';
    const CATEGORY_RENTAL_PROPERTY_MANAGEMENT = 'RENTAL_PROPERTY_MANAGEMENT';
    const CATEGORY_RESIDENTIAL = 'RESIDENTIAL';
    const CATEGORY_RETAIL = 'RETAIL';
    const CATEGORY_RETAIL_FINE_JEWELRY_AND_WATCHES = 'RETAIL_FINE_JEWELRY_AND_WATCHES';
    const CATEGORY_REUPHOLSTERY_AND_FURNITURE_REPAIR = 'REUPHOLSTERY_AND_FURNITURE_REPAIR';
    const CATEGORY_RINGS = 'RINGS';
    const CATEGORY_ROOFING_SIDING_SHEET_METAL = 'ROOFING_SIDING_SHEET_METAL';
    const CATEGORY_RUGS_AND_CARPETS = 'RUGS_AND_CARPETS';
    const CATEGORY_SCHOOLS_AND_COLLEGES = 'SCHOOLS_AND_COLLEGES';
    const CATEGORY_SCIENCE_FICTION = 'SCIENCE_FICTION';
    const CATEGORY_SCRAPBOOKING = 'SCRAPBOOKING';
    const CATEGORY_SCULPTURES = 'SCULPTURES';
    const CATEGORY_SECURITIES_BROKERS_AND_DEALERS = 'SECURITIES_BROKERS_AND_DEALERS';
    const CATEGORY_SECURITY_AND_SURVEILLANCE = 'SECURITY_AND_SURVEILLANCE';
    const CATEGORY_SECURITY_AND_SURVEILLANCE_EQUIPMENT = 'SECURITY_AND_SURVEILLANCE_EQUIPMENT';
    const CATEGORY_SECURITY_BROKERS_AND_DEALERS = 'SECURITY_BROKERS_AND_DEALERS';
    const CATEGORY_SEMINARS = 'SEMINARS';
    const CATEGORY_SERVICE_STATIONS = 'SERVICE_STATIONS';
    const CATEGORY_SERVICES = 'SERVICES';
    const CATEGORY_SEWING_NEEDLEWORK_FABRIC_AND_PIECE_GOODS_STORES = 'SEWING_NEEDLEWORK_FABRIC_AND_PIECE_GOODS_STORES';
    const CATEGORY_SHIPPING_AND_PACKING = 'SHIPPING_AND_PACKING';
    const CATEGORY_SHOE_REPAIR_HAT_CLEANING = 'SHOE_REPAIR_HAT_CLEANING';
    const CATEGORY_SHOE_STORES = 'SHOE_STORES';
    const CATEGORY_SHOES = 'SHOES';
    const CATEGORY_SNOWMOBILE_DEALERS = 'SNOWMOBILE_DEALERS';
    const CATEGORY_SOFTWARE = 'SOFTWARE';
    const CATEGORY_SPECIALTY_AND_MISC__FOOD_STORES = 'SPECIALTY_AND_MISC._FOOD_STORES';
    const CATEGORY_SPECIALTY_CLEANING_POLISHING_AND_SANITATION_PREPARATIONS = 'SPECIALTY_CLEANING_POLISHING_AND_SANITATION_PREPARATIONS';
    const CATEGORY_SPECIALTY_OR_RARE_PETS = 'SPECIALTY_OR_RARE_PETS';
    const CATEGORY_SPORT_GAMES_AND_TOYS = 'SPORT_GAMES_AND_TOYS';
    const CATEGORY_SPORTING_AND_RECREATIONAL_CAMPS = 'SPORTING_AND_RECREATIONAL_CAMPS';
    const CATEGORY_SPORTING_GOODS = 'SPORTING_GOODS';
    const CATEGORY_SPORTS_AND_OUTDOORS = 'SPORTS_AND_OUTDOORS';
    const CATEGORY_SPORTS_AND_RECREATION = 'SPORTS_AND_RECREATION';
    const CATEGORY_STAMP_AND_COIN = 'STAMP_AND_COIN';
    const CATEGORY_STATIONARY_PRINTING_AND_WRITING_PAPER = 'STATIONARY_PRINTING_AND_WRITING_PAPER';
    const CATEGORY_STENOGRAPHIC_AND_SECRETARIAL_SUPPORT_SERVICES = 'STENOGRAPHIC_AND_SECRETARIAL_SUPPORT_SERVICES';
    const CATEGORY_STOCKS_BONDS_SECURITIES_AND_RELATED_CERTIFICATES = 'STOCKS_BONDS_SECURITIES_AND_RELATED_CERTIFICATES';
    const CATEGORY_STORED_VALUE_CARDS = 'STORED_VALUE_CARDS';
    const CATEGORY_SUPPLIES = 'SUPPLIES';
    const CATEGORY_SUPPLIES_AND_TOYS = 'SUPPLIES_AND_TOYS';
    const CATEGORY_SURVEILLANCE_EQUIPMENT = 'SURVEILLANCE_EQUIPMENT';
    const CATEGORY_SWIMMING_POOLS_AND_SPAS = 'SWIMMING_POOLS_AND_SPAS';
    const CATEGORY_SWIMMING_POOLS_SALES_SUPPLIES_SERVICES = 'SWIMMING_POOLS_SALES_SUPPLIES_SERVICES';
    const CATEGORY_TAILORS_AND_ALTERATIONS = 'TAILORS_AND_ALTERATIONS';
    const CATEGORY_TAX_PAYMENTS = 'TAX_PAYMENTS';
    const CATEGORY_TAX_PAYMENTS_GOVERNMENT_AGENCIES = 'TAX_PAYMENTS_GOVERNMENT_AGENCIES';
    const CATEGORY_TAXICABS_AND_LIMOUSINES = 'TAXICABS_AND_LIMOUSINES';
    const CATEGORY_TELECOMMUNICATION_SERVICES = 'TELECOMMUNICATION_SERVICES';
    const CATEGORY_TELEPHONE_CARDS = 'TELEPHONE_CARDS';
    const CATEGORY_TELEPHONE_EQUIPMENT = 'TELEPHONE_EQUIPMENT';
    const CATEGORY_TELEPHONE_SERVICES = 'TELEPHONE_SERVICES';
    const CATEGORY_THEATER = 'THEATER';
    const CATEGORY_TIRE_RETREADING_AND_REPAIR = 'TIRE_RETREADING_AND_REPAIR';
    const CATEGORY_TOLL_OR_BRIDGE_FEES = 'TOLL_OR_BRIDGE_FEES';
    const CATEGORY_TOOLS_AND_EQUIPMENT = 'TOOLS_AND_EQUIPMENT';
    const CATEGORY_TOURIST_ATTRACTIONS_AND_EXHIBITS = 'TOURIST_ATTRACTIONS_AND_EXHIBITS';
    const CATEGORY_TOWING_SERVICE = 'TOWING_SERVICE';
    const CATEGORY_TOYS_AND_GAMES = 'TOYS_AND_GAMES';
    const CATEGORY_TRADE_AND_VOCATIONAL_SCHOOLS = 'TRADE_AND_VOCATIONAL_SCHOOLS';
    const CATEGORY_TRADEMARK_INFRINGEMENT = 'TRADEMARK_INFRINGEMENT';
    const CATEGORY_TRAILER_PARKS_AND_CAMPGROUNDS = 'TRAILER_PARKS_AND_CAMPGROUNDS';
    const CATEGORY_TRAINING_SERVICES = 'TRAINING_SERVICES';
    const CATEGORY_TRANSPORTATION_SERVICES = 'TRANSPORTATION_SERVICES';
    const CATEGORY_TRAVEL = 'TRAVEL';
    const CATEGORY_TRUCK_AND_UTILITY_TRAILER_RENTALS = 'TRUCK_AND_UTILITY_TRAILER_RENTALS';
    const CATEGORY_TRUCK_STOP = 'TRUCK_STOP';
    const CATEGORY_TYPESETTING_PLATE_MAKING_AND_RELATED_SERVICES = 'TYPESETTING_PLATE_MAKING_AND_RELATED_SERVICES';
    const CATEGORY_USED_MERCHANDISE_AND_SECONDHAND_STORES = 'USED_MERCHANDISE_AND_SECONDHAND_STORES';
    const CATEGORY_USED_PARTS_MOTOR_VEHICLE = 'USED_PARTS_MOTOR_VEHICLE';
    const CATEGORY_UTILITIES = 'UTILITIES';
    const CATEGORY_UTILITIES_ELECTRIC_GAS_WATER_SANITARY = 'UTILITIES_ELECTRIC_GAS_WATER_SANITARY';
    const CATEGORY_VARIETY_STORES = 'VARIETY_STORES';
    const CATEGORY_VEHICLE_SALES = 'VEHICLE_SALES';
    const CATEGORY_VEHICLE_SERVICE_AND_ACCESSORIES = 'VEHICLE_SERVICE_AND_ACCESSORIES';
    const CATEGORY_VIDEO_EQUIPMENT = 'VIDEO_EQUIPMENT';
    const CATEGORY_VIDEO_GAME_ARCADES_ESTABLISH = 'VIDEO_GAME_ARCADES_ESTABLISH';
    const CATEGORY_VIDEO_GAMES_AND_SYSTEMS = 'VIDEO_GAMES_AND_SYSTEMS';
    const CATEGORY_VIDEO_TAPE_RENTAL_STORES = 'VIDEO_TAPE_RENTAL_STORES';
    const CATEGORY_VINTAGE_AND_COLLECTIBLE_VEHICLES = 'VINTAGE_AND_COLLECTIBLE_VEHICLES';
    const CATEGORY_VINTAGE_AND_COLLECTIBLES = 'VINTAGE_AND_COLLECTIBLES';
    const CATEGORY_VITAMINS_AND_SUPPLEMENTS = 'VITAMINS_AND_SUPPLEMENTS';
    const CATEGORY_VOCATIONAL_AND_TRADE_SCHOOLS = 'VOCATIONAL_AND_TRADE_SCHOOLS';
    const CATEGORY_WATCH_CLOCK_AND_JEWELRY_REPAIR = 'WATCH_CLOCK_AND_JEWELRY_REPAIR';
    const CATEGORY_WEB_HOSTING_AND_DESIGN = 'WEB_HOSTING_AND_DESIGN';
    const CATEGORY_WELDING_REPAIR = 'WELDING_REPAIR';
    const CATEGORY_WHOLESALE_CLUBS = 'WHOLESALE_CLUBS';
    const CATEGORY_WHOLESALE_FLORIST_SUPPLIERS = 'WHOLESALE_FLORIST_SUPPLIERS';
    const CATEGORY_WHOLESALE_PRESCRIPTION_DRUGS = 'WHOLESALE_PRESCRIPTION_DRUGS';
    const CATEGORY_WILDLIFE_PRODUCTS = 'WILDLIFE_PRODUCTS';
    const CATEGORY_WIRE_TRANSFER = 'WIRE_TRANSFER';
    const CATEGORY_WIRE_TRANSFER_AND_MONEY_ORDER = 'WIRE_TRANSFER_AND_MONEY_ORDER';
    const CATEGORY_WOMEN_ACCESSORY_SPECIALITY = 'WOMEN_ACCESSORY_SPECIALITY';
    const CATEGORY_WOMEN_CLOTHING = 'WOMEN_CLOTHING';

    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var string */
    public $type;

    /**
     * @var string
     * The product category.
     */
    public $category;

    /** @var string */
    public $image_url;

    /** @var string */
    public $home_url;

    /**
     * @var string
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).
     * Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular
     * expression provides guidance but does not reject all invalid dates.</blockquote>
     */
    public $create_time;

    /**
     * @var string
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).
     * Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular
     * expression provides guidance but does not reject all invalid dates.</blockquote>
     */
    public $update_time;

    /** @var array<array> */
    public $links;
}
