Personne{
nomPersonnage Private:String;
classePersonnage Private:String;
attaquePersonnage private:Entier;
pointsDeViePersonnage private:Entier;
typeAttaque private:Boolean;

public Fonction constructeur(nomPersonnage,classePersonnage,attaquePersonnage,pointsDeViePersonnage,typeAttaque){
    this.nomPersonnage->nomPersonnage;
    this.classePersonnage->classePersonnage;
    this.attaquePersonnage->attaquePersonnage;
    this.pointsDeViePersonnage->pointsDeViePersonnage;
    this.typeAttaque->typeAttaque;
}
Private fonction inflicherDegats(pointsDeViePersonnage,attaquePersonnage){
return resultatDegats= (this.pointsDeViePersonnage/100)*(this.attaquePersonnage+1)
}
public fonction afficherMessage(){
    afficher("Dégats infligés :",this.resultatDegats,"Dégats");
}
tab=[personne1,personne2,personne3,personne4];
For(i->0 a tab(i)-1) FAIRE 
afficher (tab[i].inflicherDegats());
afficher (tab[i].afficherMessage())

}

Personne personne1 = new Personne(Milo,guerrier,10,100,True);
Personne personne2 = new Personne(Tya,Archere,5,50,True);
Personne Personne3 = new Personne(Lili,Archere,5,55,False);
Personne Personne4 = new Personne(Gael,Voleur,2,10,False);

Personne1, personne2, personne3:Personne;
afficher (personne1.nomPersonnage "est un ", personne1.classePersonnage, "avec une attaque de ", personne1.attaquePersonnage, "et" personne1.pointsDeViePersonnage,"points de vie des forces du"  if personne1.typeAttaque=true alors afficher (bien) else afficher (mal));
afficher (personne2.nomPersonnage "est un ", personne2.classePersonnage, "avec une attaque de ", personne2.attaquePersonnage, "et" personne2.pointsDeViePersonnage,"points de vie des forces du", if personne2.typeAttaque=true alors afficher (bien) else afficher (mal));
afficher (personne3.nomPersonnage "est un ", personne3.classePersonnage, "avec une attaque de ", personne3.attaquePersonnage, "et" personne3.pointsDeViePersonnage,"points de vie des forces du", if personne3.typeAttaque=true alors afficher (bien) else afficher (mal));
afficher (personne4.nomPersonnage "est un ", personne4.classePersonnage, "avec une attaque de ", personne4.attaquePersonnage, "et" personne4.pointsDeViePersonnage,"points de vie des forces du", if personne3.typeAttaque=true alors afficher (bien) else afficher (mal));

Livre {
nomLivre public:String;
nombrePagesLivres public :Entier;
couleurCouvertureLivres private :String;
languesLivre private :booleen;

public fonction constructeur (nomLivre,nombrePagesLivres,couleurCouvertureLivres,languesLivre){
    this.nomLivre<-nomLivre;
    this.nombrePagesLivres<-nombrePagesLivres;
    this.couleurCouvertureLivres<-couleurCouvertureLivres;
    this.languesLivre<-languesLivre;
}

Livre livre1  = new Livre("Algorithmique",500,"noire",true);
Livre livre2 = new Livre("virus asiatique",300,"rouge",false);
Livre livre3  = new Livre("France du 19e",500,"bleu",True);


livre1,livre2,livre3:Livre;
afficher("L'",livre1.nomLivre,", de" ,livre1.nombrePagesLivres,"pages, couverture",livre1.couleurCouvertureLivres, if livre1.languesLivre=true ("traduit en anglais") else ("non traduit en anglais"));
afficher("Le",livre2.nomLivre,", de" ,livre2.nombrePagesLivres,"pages, couverture",livre2.couleurCouvertureLivres, if livre2.languesLivre=true ("traduit en anglais") else ("non traduit en anglais"));
afficher("La",livre3.nomLivre,", de" ,livre3.nombrePagesLivres,"pages, couverture",livre3.couleurCouvertureLivres, if livre3.languesLivre=true ("traduit en anglais") else ("non traduit en anglais"));

public  fonction setajouterPages(ajout) {
    return nombresPagesActualiser= this.nombresPages+ajout

}

public fonction setchangerCouleur(verte){
    this.couleurCouvertureLivres<-verte
}

private fonction getinverserBooleen(){
    if this.languesLivre=true alors afficher (this.langueLivre<-true)
}
fonction afficherLivre(){
    afficher("voici le livre",this.nomLivre,this.nombrePagesLivres,this.changerCouleur("verte"),this.inverserBooleen())
}
afficher livre2.afficherLivre();
afficher livre3.afficherLivre();
}

Voiture {
marqueVoiture: String;
modeleVoiture:string
couleurVoiture:String;
nombresDePortes: Entier;
typeVoiture:Boolean;

fonction Constructeur (marqueVoiture,modeleVoiture,couleurVoiture,nombresDePortes,typeVoiture){
this.marqueVoiture<-marqueVoiture;
this.modeleVoiture<-modeleVoiture;
this.couleurVoiture<-couleurVoiture;
this.typeVoiture<-typeVoiture;
}

Voiture voiture1 = new Voiture("Yotota","Rias","Noire","5",true);
Voiture voiture2 = new Voiture("Yotota","Risau","Rouge","3",false);
Voiture voiture3 = new Voiture("Troen","5c","Rouge","5",true);


voiture1, voiture2, voiture3: Voiture;
tab = array([voiture1,voiture2,voiture3])
For(i ->0 a tab[i]-1) FAIRE AFFICHER (tab[i].marqueVoiture,"",tab[i].modeleVoiture,"",tab[i].nombresDePortes,if tab[i].typeVoiture=true ("electrique") else ("non electrique"));




fonction afficherVoiture(){
    this.marqueVoiture, this.modeleVoiture, this.couleurVoiture, this.nombresDePortes,this.typeVoiture
}
fonction afficherMarque(Yab,marqueRechercher){
    afficher "voici les vehicules", marqueRechercher
    for i -> 0 a tab(i)-1 FAIRE
    if tab[i].marqueVoiture ==="Yotota" FAIRE 
    afficher afficherVoiture()
    else {

    }
}
}