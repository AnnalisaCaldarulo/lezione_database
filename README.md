DATABASE: 

- MODELLO: il file in cui si descrivono i dati. Serve a comunicare con la singola tabella del database. (Book)
 Descrivere le caratterische del singolo oggetto di questa classe:
 $fillable = [];
- MIGRAZIONE: file di impostazione in cui si settano le regole per la creazione della tabella stessa (create_books_table)
up - migrate
down - migrate:rollback

- BookController - metodo SICURO Book::create();
- per recuperare il dato: Book::all();


CRUD:
CREATE
READ 
UPDATE
DELETE

RELAZIONE ONE TO MANY - UNO A MOLTI 
Utenti e libri: un utente può pubblicare diversi libri, un libro è pubblicato da un solo utente.

1. MODIFICA AL DATABASE:
    - aggiungere la colonna user_id alla tabella books
    - specificare che questa colonna accetta una FOREIGN KEY (chiave esterna -> riferimento a un dato di un'altra tabella)
2. COMUNICARE AD ELOQUENT LA MODIFICA: funzioni di relazione
3. tramite le funzioni possiamo recuperare facilmente i dati relazionati (ACCEDO DA USER A BOOK e viceversa)
4. aggiungere colonna al $fillable
5. controllare che le rotte siano protette da middleware
6. gestire la logica di salvataggio del dato nel db