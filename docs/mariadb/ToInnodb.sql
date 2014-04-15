SET SQL_LOG_BIN = 0;
ALTER TABLE tatoeba.acos ENGINE=InnoDB;                              
ALTER TABLE tatoeba.aros ENGINE=InnoDB;                              
ALTER TABLE tatoeba.aros_acos ENGINE=InnoDB;                         
ALTER TABLE tatoeba.contributions ENGINE=InnoDB;                     
ALTER TABLE tatoeba.countries ENGINE=InnoDB;                         
ALTER TABLE tatoeba.favorites_users ENGINE=InnoDB;                   
ALTER TABLE tatoeba.followers_users ENGINE=InnoDB;                   
ALTER TABLE tatoeba.groups ENGINE=InnoDB;                            
ALTER TABLE tatoeba.langStats ENGINE=InnoDB;                         
ALTER TABLE tatoeba.last_contributions ENGINE=InnoDB;                
ALTER TABLE tatoeba.private_messages ENGINE=InnoDB;                  
ALTER TABLE tatoeba.sentence_annotations ENGINE=InnoDB;              
ALTER TABLE tatoeba.sentence_annotations_old ENGINE=InnoDB;          
ALTER TABLE tatoeba.sentence_comments ENGINE=InnoDB;                 
ALTER TABLE tatoeba.sentences ENGINE=InnoDB;                         
ALTER TABLE tatoeba.sentences_lists ENGINE=InnoDB;                   
ALTER TABLE tatoeba.sentences_sentences_lists ENGINE=InnoDB;         
ALTER TABLE tatoeba.sentences_translations ENGINE=InnoDB;            
ALTER TABLE tatoeba.sinogram_subglyphs ENGINE=InnoDB;                
ALTER TABLE tatoeba.sinograms ENGINE=InnoDB;                         
ALTER TABLE tatoeba.tags ENGINE=InnoDB;                              
ALTER TABLE tatoeba.tags_sentences ENGINE=InnoDB;                    
ALTER TABLE tatoeba.users ENGINE=InnoDB;                             
ALTER TABLE tatoeba.visitors ENGINE=InnoDB;
ALTER TABLE tatoeba.wall ENGINE=InnoDB;
ALTER TABLE tatoeba.wall_threads_last_message ENGINE=InnoDB;
