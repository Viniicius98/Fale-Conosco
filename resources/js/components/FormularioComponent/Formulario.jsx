import React, { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";
import {
    Forms,
    FormsContent,
    FormsLabel,
    FormsInput,
    FormsButton,
    FormSuccess,
    FormError,
    StyledSelect,
    StyledTextArea,
    FormsContent2,
} from ".";
import axios from "axios";

const FormComponent = () => {
    const [emailContato, setEmailContato] = useState("");
    const [telefone, setTelefone] = useState("");
    const [mensagem, setMensagem] = useState("");
    const [motivoContato, setMotivoContato] = useState("");
    const [error, setError] = useState(null);
    const [message, setMessage] = useState("");

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const userIdFromElement = document
                .getElementById("form")
                .getAttribute("data-user-id");

            const response = await axios.post(
                "http://localhost:8000/api/faleconosco",
                {
                    user_id: userIdFromElement,
                    email_contato: emailContato,
                    telefone: telefone,
                    mensagem: mensagem,
                    motivo_contato: motivoContato,
                }
            );

            // Verifique se response está definido antes de acessar response.data
            if (response && response.data) {
                setMessage(response.data.message);

                // Limpar os campos do formulário após o envio bem-sucedido
                setUserId("");
                setEmailContato("");
                setTelefone("");
                setMensagem("");
                setMotivoContato("");

                // Definir um timeout para limpar a mensagem após 5 segundos
                setTimeout(() => {
                    setMessage("");
                }, 5000);
            }
        } catch (error) {
            // Verifique se error.response está definido antes de acessar error.response.data.message
            if (error.response && error.response.data) {
                setError(error.response.data.message);

                // Definir um timeout para limpar a mensagem após 5 segundos
                setTimeout(() => {
                    setError("");
                }, 5000);
            }
        }
    };

    return (
        <Forms onSubmit={handleSubmit}>
            <FormsContent>
                <FormsLabel htmlFor="emailContato">
                    Email de Contato:
                </FormsLabel>
                <FormsInput
                    type="email"
                    id="emailContato"
                    value={emailContato}
                    onChange={(e) => setEmailContato(e.target.value)}
                />
            </FormsContent>
            <FormsContent>
                <FormsLabel htmlFor="telefone">Telefone:</FormsLabel>
                <FormsInput
                    type="text"
                    id="telefone"
                    value={telefone}
                    onChange={(e) => setTelefone(e.target.value)}
                />
            </FormsContent>
            <FormsContent>
                <FormsLabel htmlFor="mensagem">Mensagem:</FormsLabel>
                <StyledTextArea
                    id="mensagem"
                    value={mensagem}
                    onChange={(e) => setMensagem(e.target.value)}
                />
            </FormsContent>
            <FormsContent>
                <FormsLabel htmlFor="motivoContato">
                    Motivo do Contato:
                </FormsLabel>
                <StyledSelect
                    id="motivoContato"
                    value={motivoContato}
                    onChange={(e) => setMotivoContato(e.target.value)}
                >
                    <option value="aaa">Selecione um motivo...</option>
                    <option value="Suporte">Suporte</option>
                    <option value="Feedback">Feedback</option>
                    <option value="Solicitação de Informações">
                        Solicitação de Informações
                    </option>
                    <option value="Outro">Outro</option>
                </StyledSelect>
            </FormsContent>
            <FormsContent2>
                <FormsButton type="submit">Enviar</FormsButton>
                {error && <FormError>{error}</FormError>}
                {message && <FormSuccess>{message}</FormSuccess>}
            </FormsContent2>
        </Forms>
    );
};

export default FormComponent;

const rootElement = document.getElementById("form");

if (rootElement) {
    // Verifique se o elemento raiz existe
    const Index = createRoot(rootElement);
    Index.render(<FormComponent />);
}
