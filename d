            $table->id('idReserva');
            $table->date ('datareserva');
            $table->time ('horaReserva');
            $table->integer ('numPessoas');

            $table-> foreign ('idCliente')
                     ->references ('idCliente')
                        ->on('tbCliente');


            $table-> foreign ('idRestaurante')
                     ->references ('idRestaurante')
                        ->on('tbRestaurante');

            $table-> foreign ('idStatusReserva')
                    ->references ('idStatusReserva')
                        ->on('tbStatusReserva');


            $table-> foreign ('idAvaliacao')
                     ->references ('idAvaliacao')
                        ->on('tbAvaliacao');



                        $table->id('idRestaurante');
                        $table -> string ('nomeRestaurante', 300);
                        $table -> char ('cnpjRestaurante', 14);
                        $table -> char ('telRestaurante', 13);
                        $table -> string ('loginRestaurante', 100);
                        $table -> string ('senhaRestaurante', 255);
                        $table -> binary ('fotoRestaurante');
                        $table -> string ('emailRestaurante', 100);
                        $table -> char ('cepRestaurante', 9);
                        $table -> string ('ruaRestaurante', 100);
                        $table -> string ('numCasa', 5);
                        $table -> string ('bairroRestaurante', 100);
                        $table -> string ('cidadeRestaurante', 100);
                        $table -> string ('estadoRestaurante', 40);
                        $table -> integer ('capMaximaRestaurante');
                        $table->timestamps();
                    });




                    $table -> id('idPrato');
                    $table -> string ('nomePrato', 60);
                    $table -> decimal ('valorPrato', 6,2);
                    $table -> string ('ingredientePrato', 100);
                    $table -> binary ('fotoPrato');
                    $table -> foreign ('idTipoPrato')
                                -> references('idTipoPrato')
                                    -> on ('tbTipoPrato');
                    $table->timestamps();
                });


                $table -> id('idMesa');
                $table -> integer('quantAcentosMesa');
                $table -> integer('statusMesa');
                $table -> integer ('numMesa');
                $table -> foreign ('idRestaurante')
                            -> references('idRestaurante')
                                -> on ('tbRestaurante');
                $table -> timestamps();
            });



            $table->increments ('idReserva');
            $table->date ('datareserva');
            $table->time ('horaReserva');
            $table->integer ('numPessoas');
            $table -> integer('idCliente') -> unsigned();