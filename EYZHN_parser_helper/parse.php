<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php

/*
Parses answers from EYZHN lesson to help identify the correct answers
v008

Instructions
just copy/paste all the answers in the srt_initial variable. This program will sort them all and print only the correct and wrong answers
*/
$debug=false;
$str_initial = " 

 Ερώτηση 1 (Βάρος 6.67%)

Ως καλύτερες πηγές της βιταμίνης C θεωρούνται:
(x)Τα εσπεριδοειδή φρούτα, αλλά και κάποια λαχανικά, όπως το μπρόκολο, οι πιπεριές, το λάχανο, κλπ.
( )Ζωικά τρόφιμα, όπως το κρέας, τα ψάρια, τα αβγά και τα γαλακτοκομικά προϊόντα.
( )Τα περισσότερα τρόφιμα τόσο ζωικής όσο και φυτικής προέλευσης.
( )Το σπανάκι, το μπρόκολο, τα παντζάρια, και τα πράσινα λαχανικά, ενώ κάποια ποσότητά της σχηματίζεται και στο έντερο από βακτήρια.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

  Ερώτηση 2 (Βάρος 6.67%)

Ποια είναι η κύρια μορφή με την οποία το λίπος προσλαμβάνεται μέσω της τροφής και αποθηκεύεται στο λιπώδη ιστό;
( )Η χοληστερόλη και οι εστέρες χοληστερόλης.
(x)Τα φωσφολιπίδια.
( )Οι τριακυλογλυκερόλες (τριγλυκερίδια).

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 3 (Βάρος 6.67%)

Ποια από τις παρακάτω προτάσεις σχετικά με τις πρωτεϊνικές ανάγκες του ανθρώπινου οργανισμού δεν ισχύει;
( )Τα άτομα που ακολουθούν μια φυτοφαγική διατροφή αδυνατούν να καλύψουν τις πρωτεϊνικές τους ανάγκες.
( )Ορισμένα αμινοξέα πρέπει να προσλαμβάνονται μέσω της τροφής, καθώς ανήκουν στα απαραίτητα θρεπτικά συστατικά.
( )Οι πρωτεϊνικές ανάγκες ενός ατόμου εξαρτώνται από διάφορους παράγοντες, όπως το φύλο, η ηλικία, το γενετικό προφίλ, η κατάσταση υγείας κ.ά.
(x)Στις μέρες μας παρατηρείται σπάνια ανεπαρκής πρόσληψη πρωτεϊνών σε κατοίκους των ανεπτυγμένων χωρών.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 4 (Βάρος 6.67%)

Ποια είδη λιπιδίων επιτελούν δομικό ρόλο στο ανθρώπινο σώμα;
( )Η χοληστερόλη.
(x)Τα φωσφολιπίδια.
( )Η χοληστερόλη και τα φωσφολιπίδια.
( )Κανένα από τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 5 (Βάρος 6.67%)

Ποια είδη λιπιδίων έχουν συσχετισθεί με αύξηση του κινδύνου εμφάνισης χρόνιων νοσημάτων (κατά κύριο λόγο καρδιαγγειακών νοσημάτων);
( )Τα πολυακόρεστα λιπαρά οξέα.
(x)Τα ω-3 λιπαρά οξέα και η χοληστερόλη.
( )Τα κορεσμένα και τα τρανς λιπαρά οξέα.
( )Όλα τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 6 (Βάρος 6.67%)

Η πρόσληψη πρωτεϊνών υψηλής βιολογικής αξίας (πλήρεις πρωτεΐνες) μπορεί να εξασφαλισθεί μέσω:
( )Της κατανάλωσης τροφίμων ζωικής προέλευσης αποκλειστικά.
( )Της κατανάλωσης τροφίμων ζωικής προέλευσηςκαι κάποιων συνδυασμών φυτικών τροφίμων (π.χ. όσπρια και δημητριακά).
(x)Της κατανάλωσης φρούτων και λαχανικών.
( )Της κατανάλωσης ξηρών καρπών, σπόρων και δημητριακών ολικής άλεσης.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 7 (Βάρος 6.67%)

Ποια από τις παρακάτω προτάσεις σχετικά με τον σίδηρο είναι λανθασμένη;
(x)Ο αιμικός σίδηρος απορροφάται σε υψηλότερο ποσοστό από τον ανθρώπινο οργανισμό, σε σύγκριση με τον μη αιμικό.
( )Η ταυτόχρονη κατανάλωση τροφίμων που περιέχουν βιταμίνη C παρεμποδίζει την απορρόφηση σιδήρου από τον οργανισμό και θα πρέπει να αποφεύγεται.
( )Η έλλειψη σιδήρου αποτελεί την κύρια διατροφική έλλειψη των ατόμων που υιοθετούν μια αυστηρά φυτοφαγική δίαιτα.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 8 (Βάρος 6.67%)

Ποια από τις παρακάτω προτάσεις περιγράφει σωστά το ισοζύγιο ύδατος του σώματος;
( )Το νερό προσλαμβάνεται αποκλειστικά μέσω της κατανάλωσης υγρών και αποβάλλεται από τους νεφρούς, το δέρμα, τους πνεύμονες και τα κόπρανα.
(x)Το νερό εξασφαλίζεται μέσω της κατανάλωσης υγρών και στερεών τροφίμων και μέσω των αντιδράσεων του μεταβολισμού (μεταβολικό νερό) και αποβάλλεται από τους νεφρούς, το δέρμα, τους πνεύμονες και τα κόπρανα.
( )Το νερό παράγεται μέσω του μεταβολισμού στην ακριβή ποσότητα που χρειάζεται το σώμα και για αυτό δεν είναι αναγκαίο να προσλαμβάνεται μέσω της διατροφής αλλά ούτε αποβάλλεται από το σώμα.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

  Ερώτηση 9 (Βάρος 6.67%)

Ποιο αμινοξύ ονομάζεται «περιοριστικό»;
( )Το αμινοξύ που περιορίζει την αξιοποίηση των πρωτεϊνών ως πηγή ενέργειας.
( )Το απαραίτητο αμινοξύ που απαντάται σε ένα τρόφιμο στη χαμηλότερη ποσότητα.
(x)Το μοναδικό αμινοξύ της δίαιτας που συμμετέχει στην πρωτεϊνοσύνθεση.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 10 (Βάρος 6.67%)

Ποια από τις παρακάτω προτάσεις σχετικά με τους υδατάνθρακες είναι σωστή;
(x)Οι υδατάνθρακες δεν αποτελούν το σημαντικότερο ενεργειακό καύσιμο του σώματος, για αυτό και πρέπει να προσλαμβάνονται σε μικρότερη ποσότητα σε σχέση με τα υπόλοιπα θερμιδογόνα μακροθρεπτικά συστατικά.
( )Οι υδατάνθρακες ανήκουν στα απαραίτητα θρεπτικά συστατικά.
( )Οι υδατάνθρακες διακρίνονται σε μονο-, ολιγο- και πολυσακχαρίτες, ανάλογα με τον αριθμό των σακχάρων που περιέχουν.
( )Οι υδατάνθρακες περιέχονται σε υψηλή ποσότητα στα φυτικά έλαια, στο αβγό, στα όσπρια και στα γλυκά.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 11 (Βάρος 6.67%)

Ακραία ανεπάρκεια βιταμίνης D οδηγεί σε:
( )Διαταραχές στην όραση, όπως η ξηροφθαλμία και η νυκταλωπία.
( )Διαταραχές των οστών, όπως η ραχίτιδα στα παιδιά και η οστεομαλακία στους ενήλικες.
(x)Μεγαλοβλαστική αναιμία και γαστρεντερικές διαταραχές, όπως η διάρροια.
( )Όλα τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 12 (Βάρος 6.67%)

Σε περίπτωση πλήρους αποχής από το γάλα και τα γαλακτοκομικά προϊόντα, για ποιο/α θρεπτικό/ά συστατικό/ά θα πρέπει να αναζητηθούν εναλλακτικές πηγές;
(x)Για τον σίδηρο.
( )Για το ασβέστιο.
( )Για τις λιποδιαλυτές βιταμίνες Α, D, E και Κ.
( )Για τα απαραίτητα αμινοξέα ιστιδίνη, λευκίνη και ισολευκίνη.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 13 (Βάρος 6.67%)

Ποια είναι η ποσότητα νερού που πρέπει να προσλαμβάνει καθημερινά κατά μέσο όρο ένας ενήλικας άνδρας, για να καλύψει τις ανάγκες του;
( )1200 ml
( )2800 ml
(x)4000 ml
( )500 ml

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

  Ερώτηση 14 (Βάρος 6.67%)

Οι διαιτητικές ίνες:
( )Αποτελούν πολυμερή υδατανθράκων που δεν πέπτονται στο λεπτό έντερο και υφίστανται μερική ή ολική ζύμωση στο παχύ έντερο από βακτήρια.
( )Συμβάλλουν στην αύξηση του όγκου και της μαλακότητας των κοπράνων και επισπεύδουν την κένωση του πεπτικού σωλήνα.
( )Προάγουν την καλή λειτουργία του πεπτικού και του καρδιαγγειακού συστήματος και προστατεύουν από την εμφάνιση νοσημάτων, όπως ο σακχαρώδης διαβήτης και ο καρκίνος του παχέος εντέρου.
(x)Όλα τα παραπάνω.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

  Ερώτηση 15 (Βάρος 6.67%)

Ποιος πολυσακχαρίτης πέπτεται από τον άνθρωπο και συμμετέχει σε σημαντικό βαθμό στη διαιτητική του πρόσληψη;
(x)Η κυτταρίνη.
( )Το άμυλο.
( )Το άμυλο και το γλυκογόνο.
( )Κανένα από τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%



 



 
Αναζήτηση
 Αποσύνδεση  Εμφάνιση/απόκρυψη μενούΕμφάνιση/απόκρυψη μενού
Αρχική σελίδα » Διαλέξεις ΕΥΖΗΝ » A2. ΘΡΕΠΤΙΚΑ ΣΥΣΤΑΤΙΚΑ » Τεστ Aξιολόγησης
ΣημειώσειςΤεστ Aξιολόγησης
Αποτυχία	
Η αξιολόγηση ξεκίνησε στις 28 Μάι 2016, 12:56:28 και ολοκληρώθηκε στις 28 Μάι 2016, 12:57:19. Ολοκληρώθηκε σε 51δ.
Η αξιολόγηση έχει ολοκληρωθεί 1 φορές
Η βαθμολογία είναι:  53.33%   Αποτυχία
 Επανάληψη αξιολόγησης Επανάληψη αξιολόγησης  Ανάλυση αξιολόγησης Ανάλυση αξιολόγησης
 Η ερώτηση είναι λάθος Ερώτηση 1 (Βάρος 6.67%)
Ποια από τις παρακάτω προτάσεις σχετικά με τους υδατάνθρακες είναι σωστή;
(x)Οι υδατάνθρακες δεν αποτελούν το σημαντικότερο ενεργειακό καύσιμο του σώματος, για αυτό και πρέπει να προσλαμβάνονται σε μικρότερη ποσότητα σε σχέση με τα υπόλοιπα θερμιδογόνα μακροθρεπτικά συστατικά.
( )Οι υδατάνθρακες ανήκουν στα απαραίτητα θρεπτικά συστατικά.
( )Οι υδατάνθρακες διακρίνονται σε μονο-, ολιγο- και πολυσακχαρίτες, ανάλογα με τον αριθμό των σακχάρων που περιέχουν.
( )Οι υδατάνθρακες περιέχονται σε υψηλή ποσότητα στα φυτικά έλαια, στο αβγό, στα όσπρια και στα γλυκά.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι σωστή Ερώτηση 2 (Βάρος 6.67%)
Η πρόσληψη πρωτεϊνών υψηλής βιολογικής αξίας (πλήρεις πρωτεΐνες) μπορεί να εξασφαλισθεί μέσω:
( )Της κατανάλωσης τροφίμων ζωικής προέλευσης αποκλειστικά.
(x)Της κατανάλωσης τροφίμων ζωικής προέλευσηςκαι κάποιων συνδυασμών φυτικών τροφίμων (π.χ. όσπρια και δημητριακά).
( )Της κατανάλωσης φρούτων και λαχανικών.
( )Της κατανάλωσης ξηρών καρπών, σπόρων και δημητριακών ολικής άλεσης.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι λάθος Ερώτηση 3 (Βάρος 6.67%)
Ως καλύτερες πηγές της βιταμίνης C θεωρούνται:
( )Τα εσπεριδοειδή φρούτα, αλλά και κάποια λαχανικά, όπως το μπρόκολο, οι πιπεριές, το λάχανο, κλπ.
(x)Ζωικά τρόφιμα, όπως το κρέας, τα ψάρια, τα αβγά και τα γαλακτοκομικά προϊόντα.
( )Τα περισσότερα τρόφιμα τόσο ζωικής όσο και φυτικής προέλευσης.
( )Το σπανάκι, το μπρόκολο, τα παντζάρια, και τα πράσινα λαχανικά, ενώ κάποια ποσότητά της σχηματίζεται και στο έντερο από βακτήρια.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι σωστή Ερώτηση 4 (Βάρος 6.67%)
Ποιο αμινοξύ ονομάζεται «περιοριστικό»;
( )Το αμινοξύ που περιορίζει την αξιοποίηση των πρωτεϊνών ως πηγή ενέργειας.
(x)Το απαραίτητο αμινοξύ που απαντάται σε ένα τρόφιμο στη χαμηλότερη ποσότητα.
( )Το μοναδικό αμινοξύ της δίαιτας που συμμετέχει στην πρωτεϊνοσύνθεση.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι σωστή Ερώτηση 5 (Βάρος 6.67%)
Σε περίπτωση πλήρους αποχής από το γάλα και τα γαλακτοκομικά προϊόντα, για ποιο/α θρεπτικό/ά συστατικό/ά θα πρέπει να αναζητηθούν εναλλακτικές πηγές;
( )Για τον σίδηρο.
(x)Για το ασβέστιο.
( )Για τις λιποδιαλυτές βιταμίνες Α, D, E και Κ.
( )Για τα απαραίτητα αμινοξέα ιστιδίνη, λευκίνη και ισολευκίνη.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι λάθος Ερώτηση 6 (Βάρος 6.67%)
Ποια είναι η κύρια μορφή με την οποία το λίπος προσλαμβάνεται μέσω της τροφής και αποθηκεύεται στο λιπώδη ιστό;
(x)Η χοληστερόλη και οι εστέρες χοληστερόλης.
( )Τα φωσφολιπίδια.
( )Οι τριακυλογλυκερόλες (τριγλυκερίδια).

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι λάθος Ερώτηση 7 (Βάρος 6.67%)
Ακραία ανεπάρκεια βιταμίνης D οδηγεί σε:
( )Διαταραχές στην όραση, όπως η ξηροφθαλμία και η νυκταλωπία.
( )Διαταραχές των οστών, όπως η ραχίτιδα στα παιδιά και η οστεομαλακία στους ενήλικες.
(x)Μεγαλοβλαστική αναιμία και γαστρεντερικές διαταραχές, όπως η διάρροια.
( )Όλα τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι σωστή Ερώτηση 8 (Βάρος 6.67%)
Ποια από τις παρακάτω προτάσεις περιγράφει σωστά το ισοζύγιο ύδατος του σώματος;
( )Το νερό προσλαμβάνεται αποκλειστικά μέσω της κατανάλωσης υγρών και αποβάλλεται από τους νεφρούς, το δέρμα, τους πνεύμονες και τα κόπρανα.
(x)Το νερό εξασφαλίζεται μέσω της κατανάλωσης υγρών και στερεών τροφίμων και μέσω των αντιδράσεων του μεταβολισμού (μεταβολικό νερό) και αποβάλλεται από τους νεφρούς, το δέρμα, τους πνεύμονες και τα κόπρανα.
( )Το νερό παράγεται μέσω του μεταβολισμού στην ακριβή ποσότητα που χρειάζεται το σώμα και για αυτό δεν είναι αναγκαίο να προσλαμβάνεται μέσω της διατροφής αλλά ούτε αποβάλλεται από το σώμα.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι σωστή Ερώτηση 9 (Βάρος 6.67%)
Ποια είναι η ποσότητα νερού που πρέπει να προσλαμβάνει καθημερινά κατά μέσο όρο ένας ενήλικας άνδρας, για να καλύψει τις ανάγκες του;
( )1200 ml
(x)2800 ml
( )4000 ml
( )500 ml

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι λάθος Ερώτηση 10 (Βάρος 6.67%)
Ποια είδη λιπιδίων επιτελούν δομικό ρόλο στο ανθρώπινο σώμα;
( )Η χοληστερόλη.
(x)Τα φωσφολιπίδια.
( )Η χοληστερόλη και τα φωσφολιπίδια.
( )Κανένα από τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι σωστή Ερώτηση 11 (Βάρος 6.67%)
Ποιος πολυσακχαρίτης πέπτεται από τον άνθρωπο και συμμετέχει σε σημαντικό βαθμό στη διαιτητική του πρόσληψη;
( )Η κυτταρίνη.
(x)Το άμυλο.
( )Το άμυλο και το γλυκογόνο.
( )Κανένα από τα παραπάνω.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι λάθος Ερώτηση 12 (Βάρος 6.67%)
Οι διαιτητικές ίνες:
( )Αποτελούν πολυμερή υδατανθράκων που δεν πέπτονται στο λεπτό έντερο και υφίστανται μερική ή ολική ζύμωση στο παχύ έντερο από βακτήρια.
( )Συμβάλλουν στην αύξηση του όγκου και της μαλακότητας των κοπράνων και επισπεύδουν την κένωση του πεπτικού σωλήνα.
(x)Προάγουν την καλή λειτουργία του πεπτικού και του καρδιαγγειακού συστήματος και προστατεύουν από την εμφάνιση νοσημάτων, όπως ο σακχαρώδης διαβήτης και ο καρκίνος του παχέος εντέρου.
( )Όλα τα παραπάνω.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι λάθος Ερώτηση 13 (Βάρος 6.67%)
Ποια από τις παρακάτω προτάσεις σχετικά με τον σίδηρο είναι λανθασμένη;
(x)Ο αιμικός σίδηρος απορροφάται σε υψηλότερο ποσοστό από τον ανθρώπινο οργανισμό, σε σύγκριση με τον μη αιμικό.
( )Η ταυτόχρονη κατανάλωση τροφίμων που περιέχουν βιταμίνη C παρεμποδίζει την απορρόφηση σιδήρου από τον οργανισμό και θα πρέπει να αποφεύγεται.
( )Η έλλειψη σιδήρου αποτελεί την κύρια διατροφική έλλειψη των ατόμων που υιοθετούν μια αυστηρά φυτοφαγική δίαιτα.

Βαθμολογία: 0.00% Βαθμολογία στην αξιολόγηση: 0.00% × 6.67 = 0.00%

Η ερώτηση είναι σωστή Ερώτηση 14 (Βάρος 6.67%)
Ποια είδη λιπιδίων έχουν συσχετισθεί με αύξηση του κινδύνου εμφάνισης χρόνιων νοσημάτων (κατά κύριο λόγο καρδιαγγειακών νοσημάτων);
( )Τα πολυακόρεστα λιπαρά οξέα.
( )Τα ω-3 λιπαρά οξέα και η χοληστερόλη.
(x)Τα κορεσμένα και τα τρανς λιπαρά οξέα.
( )Όλα τα παραπάνω.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

Η ερώτηση είναι σωστή Ερώτηση 15 (Βάρος 6.67%)
Ποια από τις παρακάτω προτάσεις σχετικά με τις πρωτεϊνικές ανάγκες του ανθρώπινου οργανισμού δεν ισχύει;
(x)Τα άτομα που ακολουθούν μια φυτοφαγική διατροφή αδυνατούν να καλύψουν τις πρωτεϊνικές τους ανάγκες.
( )Ορισμένα αμινοξέα πρέπει να προσλαμβάνονται μέσω της τροφής, καθώς ανήκουν στα απαραίτητα θρεπτικά συστατικά.
( )Οι πρωτεϊνικές ανάγκες ενός ατόμου εξαρτώνται από διάφορους παράγοντες, όπως το φύλο, η ηλικία, το γενετικό προφίλ, η κατάσταση υγείας κ.ά.
( )Στις μέρες μας παρατηρείται σπάνια ανεπαρκής πρόσληψη πρωτεϊνών σε κατοίκους των ανεπτυγμένων χωρών.

Βαθμολογία: 100.00% Βαθμολογία στην αξιολόγηση: 100.00% × 6.67 = 6.67%

 Σημειώσεις	Σημειώσεις	
eFront (version 3.6.14) • Community Edition • Επικοινωνήστε μαζί μας



";
$split_level1=explode("Ερώτηση ",$str_initial);

//if($debug) print_r ($split_level1);
$question_line=1;
//+++++++++++++++++++++find sort lind
$test_line = preg_split('/[\n\r]+/',$split_level1[3]);
	if (strpos($test_line[0], '(Βάρος 6.67%)')){ echo "<h1>question_line=1</h1>";$question_line=1; } else echo "fail";
	if (strpos($test_line[1], '(Βάρος 6.67%)')){ echo "<h1>question_line=2</h1>";$question_line=2; }
	if($debug) echo "<h1>test_line[$question_line]".$test_line[$question_line]."</h1>";

//+++++++++++++++++++++check
$new_array=Array();

$count=0;
foreach($split_level1 as $part){



	$lines_arr = preg_split('/[\n\r]+/',$part);
	//$lines_arr[$question_line-1]="baros";
	//$lines_arr[$question_line-2]="zzzzzzzzzzzzN";
	$lines_arr[$question_line]="QUESTION:".$lines_arr[$question_line];
	//$lines_arr[$question_line+1]="z0000z000000";	
	//if($debug) print_r($lines_arr);

//+++++++++++++++++++++check if answer is correct	
	$x_color="red";
	foreach($lines_arr as $one_line){
			if (strpos($one_line, 'Βαθμολογία: 100.00%') !== false){$x_color="green";}
	}	
//+++++++++++++++++++++ print
	foreach($lines_arr as $one_line){

		
		if (strpos($one_line, '(x)') !== false){
			//echo "<font color=$x_color>".$one_line."</font><BR>";
			//array_push($new_array[$count][1],"<font color=$x_color>".$one_line."</font><BR>");
			$new_array[$count][1][]="<font color=$x_color>".$one_line."</font><BR>";
		}else if (strpos($one_line, "QUESTION:") !== false) {
			$new_array[$count][0]=$one_line;
		} else {
			//echo "<font color=grey>".$one_line."</font><BR>";
			$new_array[$count][1][]="<font >".$one_line."</font><BR>";
		}
		
	}// end of foreach($lines_arr as $one_line){
$count++;

}
	echo "<HR>";
//if($debug) print_r ($new_array);
usort ($new_array,
    function ($a,$b) {
       return strcmp($a[0], $b[0]);
    });

//if($debug) print_r ($new_array);
$new_array_length = count($new_array);
//foreach($new_array as $part){

//show only correct and wrong answers
for($i=1;$i<$new_array_length;$i++){
	//print_r ($new_array[$i][0]);
	if($new_array[$i][0]!=$new_array[$i-1][0]) 	echo "<h2>".$new_array[$i][0]."</h2>";
	if (strpos($new_array[$i][1][1], '<font color=') !== false)echo $new_array[$i][1][1];
	if (strpos($new_array[$i][1][2], '<font color=') !== false)echo $new_array[$i][1][2];
	if (strpos($new_array[$i][1][3], '<font color=') !== false)echo $new_array[$i][1][3];
	if (strpos($new_array[$i][1][4], '<font color=') !== false)echo $new_array[$i][1][4];
}

//print all
/*
for($i=1;$i<$new_array_length;$i++){
	//print_r ($new_array[$i][0]);
	echo "<h2>".$new_array[$i][0]."</h2>";
	echo $new_array[$i][1][1];
	echo $new_array[$i][1][2];
	echo $new_array[$i][1][3];
	echo $new_array[$i][1][4];
}
*/
?>
<h3>
function cmp($a, $b) {
	global $question_line;
   return $a[$question_line] - $b[$question_line];
}

usort($split_level1,"cmp");


/*
function cmp($a, $b) {
	global $question_line;
	//$a = preg_replace('/^[^,]*,\s*/', '(Βάρος 6.67%)', $a);
	//$b = preg_replace('/^[^,]*,\s*/', '(Βάρος 6.67%)', $b);
   //return $a[$question_line] - $b[$question_line];
   //return strcmp(strtoupper($a[$question_line]), strtoupper($b[$question_line]));
   return strcmp($a[$question_line], $b[$question_line]);
}
usort($split_level1,"cmp");
*/
</h3>


















