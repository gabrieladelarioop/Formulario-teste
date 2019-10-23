describe('Form exist', function() {
  it('test if field exists', function() {
    cy.visit('http://localhost:8000')

    cy.contains('Comment')
    cy.contains('CPF')
    cy.contains('Age')
    cy.contains('Telephone')
    cy.contains('address')
    cy.contains('Email')
    cy.contains('Name')


  })

it('test form field completion and submit',function() {
  cy.get('input[name="name"]').type("Gabriel");
  cy.get('input[name="age"]').type("16");
  cy.get('input[name="CPF"]').type("65554215");
  cy.get('input[name="telephone"]').type("316584562");
  cy.get('input[name="address"]').type("Rua street");
  cy.get('input[name="email"]').type("gabriel@lucas");
  cy.get('input[name="Submit"]').click()
  cy.contains('NameGabriel')
  cy.contains('Email: gabriel@lucas')
  cy.contains('Endereço: Rua street')
  cy.contains('Telefone: 316584562')
  cy.contains('CPF: 65554215')
  cy.contains('Idade: 16')

})








  it('test required fields', function() {
   cy.visit('http://localhost:8000')
    cy.get('input[name="name"]').type("Gabriel");

    cy.get('input[name="age"]').type("16");
    cy.get('input[name="CPF"]').type("65554215");
    cy.get('input[name="telephone"]').type("316584562");
    cy.get('input[name="address"]').type("Rua street");
    cy.get('input[name="email"]').type("gabriel@lucas");
    cy.contains('NameGabriel').should('not.exist')
    cy.contains("Email: gabriel@lucas").should('not.exist')
    cy.contains("Endereço: Rua street").should("not.exist")
    cy.contains('Telefone: 316584562').should("not.exists")
    cy.contains("CPF: 65554215").should("not.exists")
    cy.contains("Idade").should("not.exists")
  })


})
