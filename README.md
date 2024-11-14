DATABASE: 

- MODELLO: il file in cui si descrivono i dati. Serve a comunicare con la singola tabella del database. (Book)
 Descrivere le caratterische del singolo oggetto di questa classe:
 $fillable = [];
- MIGRAZIONE: file di impostazione in cui si settano le regole per la creazione della tabella stessa (create_books_table)
up - migrate
down - migrate:rollback

- BookController - metodo SICURO Book::create();
- per recuperare il dato: Book::all();